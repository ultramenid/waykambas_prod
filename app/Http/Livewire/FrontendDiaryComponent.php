<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendDiaryComponent extends Component
{
    public $listdata = 5, $start, $end;
    // use WithPagination;

    public function getContenteksternal(){
        if ($this->start and $this->end){
            return DB::table('greendiary')
            ->select('publishdate')
            ->distinct('publishdate')
            ->whereBetween('publishdate', [$this->start, $this->end])
            ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
            ->where('isActive', 1)
            ->orderBy('publishdate', 'desc')
            ->cursorPaginate($this->listdata);
        }else{
            return DB::table('greendiary')
            ->select('publishdate')
            ->distinct('publishdate')
            ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
            ->where('isActive', 1)
            ->orderBy('publishdate', 'desc')
            ->cursorPaginate($this->listdata);
        }

    }


    public function getMore(){
         $this->listdata += 5;
    }

    public function render()
    {
        $diaries = $this->getContenteksternal();
        return view('livewire.frontend-diary-component', compact('diaries'));
    }
}
