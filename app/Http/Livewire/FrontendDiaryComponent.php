<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendDiaryComponent extends Component
{
    public $paginate = 7, $start, $end;
    use WithPagination;

    public function getContenteksternal(){
        if ($this->start and $this->end){
            return DB::table('greendiary')
            ->select('publishdate')
            ->distinct('publishdate')
            ->whereBetween('publishdate', [$this->start, $this->end])
            ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
            ->where('isActive', 1)
            ->orderBy('publishdate', 'desc')
            ->paginate($this->paginate);
        }else{
            return DB::table('greendiary')
            ->select('publishdate')
            ->distinct('publishdate')
            ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
            ->where('isActive', 1)
            ->orderBy('publishdate', 'desc')
            ->paginate($this->paginate);
        }

    }


    public function render()
    {
        $diaries = $this->getContenteksternal();
        return view('livewire.frontend-diary-component', compact('diaries'));
    }
}
