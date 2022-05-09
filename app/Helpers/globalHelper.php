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
        return 'id, titleID as title, slugID as slug, imgDescID as imgDesc, img';
    }else{
        return 'id, titleEN as title, slugEN as slug, imgDescEN as imgDesc, img';
    }
}
