<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AZrestorationController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, azID as az, titleID as title, category';
        }else{
            return 'id, azID as az, titleID as title, category';

            // return 'id, azEN as az, titleEN as title';
        }
    }
    public function getAz(){
        return DB::table('azrestoration')
                ->selectRaw($this->getSelect())
                ->get();
    }
    public function index(){
        $title = 'A to Z Restorasi Kadut - Way Kambas';
        $text = 'A to Z Restorasi Kadut';
        $content = $this->getAz();
        $cssbackground = 'bg-az';
        $nav = 'az';
        return view('frontend.azrestoration', compact('title', 'text', 'content','cssbackground','nav'));
    }

    public function getKonteks(){
        return DB::table('azrestoration')
                ->selectRaw($this->getSelect())
                ->where('category', 'konteks')
                ->where('isActive', 1)
                ->get();
    }

    public function getSilvikultur(){
        return DB::table('azrestoration')
                ->selectRaw($this->getSelect())
                ->where('category', 'silvikultur')
                ->where('isActive', 1)
                ->get();
    }

    public function getPenanggulanganKebakaran(){
        return DB::table('azrestoration')
        ->selectRaw($this->getSelect())
        ->where('category', 'penanggulangankebakaran')
        ->where('isActive', 1)
        ->get();
    }

    public function getPelibatanMasyarakat(){
        return DB::table('azrestoration')
        ->selectRaw($this->getSelect())
        ->where('category', 'pelibatanmasyarakat')
        ->where('isActive', 1)
        ->get();
    }


    public function newAZ(){
        $title = 'A to Z - Restorasi Kadut ';
        $text = 'A to Z Restorasi Kadut';
        $description = 'Kenapa di Kadut. Apa urgensi dan nilai pentingnya. Apa-apa saja yang dikerjakan. Kenapa tindakan tertentu dilakukan. Bagaimana pelibatan masyarakat. Dan berbagai hal teknis lainnya.';
        $ogimage = 'meta.png';
        // $content = $this->getAz();
        // $cssbackground = 'bg-az';
        $konteks = $this->getKonteks();
        $silvikultur = $this->getSilvikultur();
        $penanggulangankebakaran = $this->getPenanggulanganKebakaran();
        $pelibatanmasyarakat = $this->getPelibatanMasyarakat();
        // dd($konteks);
        $nav = 'az';
        return view('frontend.new-az', compact('title', 'text','nav', 'konteks', 'silvikultur','penanggulangankebakaran', 'pelibatanmasyarakat', 'description', 'ogimage'));
    }
}
