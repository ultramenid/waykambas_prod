<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

function getContentDiary($publishdate){
    return DB::table('greendiary')
    ->selectRaw(getSelectDiary())
    ->where('isActive', 1)
    ->where('publishdate', $publishdate)
    ->orderBy('publishdate', 'desc')
    ->get();
}

 function getSelectDiary(){
    if (App::getLocale() == 'id') {
        return 'id, titleID as title, slugID as slug, imgDescID as imgDesc, img, publishdate';
    }else{
        return "id, COALESCE(NULLIF(titleEN, ''), titleID) as title, slugID as slug, COALESCE(NULLIF(imgDescEN, ''), imgDescID) as imgDesc, img, publishdate";

        // return 'id, titleEN as title, slugEN as slug, imgDescEN as imgDesc, img, publishdate';
    }
}

// value of {field}EN on english pages, falls back to {field}ID when empty
function localizedField($row, $field){
    $en = $row->{$field.'EN'} ?? null;
    if (App::getLocale() == 'en' && $en) {
        return $en;
    }
    return $row->{$field.'ID'};
}

// Text pasted inside a 16:9 video wrapper (aspect-w-*) in the CMS editor ends up hidden behind the video.
// Move everything except the video out of the wrapper: content before the video goes in front of it,
// content after the video goes behind it. Returns the html untouched when there is nothing to fix.
function fixVideoWrappers($html){
    if (!$html || strpos($html, 'aspect-w-') === false) {
        return $html;
    }

    $dom = new DOMDocument();
    $internalErrors = libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="UTF-8"><div id="video-wrapper-root">'.$html.'</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();
    libxml_use_internal_errors($internalErrors);

    $xpath = new DOMXPath($dom);
    $changed = false;
    $wrappers = iterator_to_array($xpath->query('//div[contains(concat(" ", normalize-space(@class)), " aspect-w-")]'));
    foreach ($wrappers as $wrapper) {
        $media = null;
        $anchor = $wrapper;
        foreach (iterator_to_array($wrapper->childNodes) as $child) {
            if (!$media && $child instanceof DOMElement && in_array(strtolower($child->tagName), ['iframe', 'video', 'embed', 'object'])) {
                $media = $child;
                continue;
            }
            // whitespace moves along to keep the spacing, but alone it is not worth a rewrite
            if (!($child instanceof DOMText && trim($child->textContent) === '')) {
                $changed = true;
            }
            if ($media) {
                $wrapper->parentNode->insertBefore($child, $anchor->nextSibling);
                $anchor = $child;
            } else {
                $wrapper->parentNode->insertBefore($child, $wrapper);
            }
        }
        // a wrapper without a video would only leave an empty 16:9 gap
        if (!$media) {
            $wrapper->parentNode->removeChild($wrapper);
            $changed = true;
        }
    }

    if (!$changed) {
        return $html;
    }
    $root = $xpath->query('//div[@id="video-wrapper-root"]')->item(0);
    $out = '';
    foreach ($root->childNodes as $node) {
        $out .= $dom->saveHTML($node);
    }
    return $out;
}

// current page url in another language
function switchLangUrl($lang){
    $route = request()->route();
    return route($route->getName(), array_merge($route->parameters(), ['lang' => $lang]));
}
