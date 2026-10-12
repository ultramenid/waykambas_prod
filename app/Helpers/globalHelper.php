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

// current page url in another language
function switchLangUrl($lang){
    $route = request()->route();
    return route($route->getName(), array_merge($route->parameters(), ['lang' => $lang]));
}
