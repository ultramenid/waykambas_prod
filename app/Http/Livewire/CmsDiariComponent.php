<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class CmsDiariComponent extends Component
{
    public $deleteName, $deleteID;
    public $dataField = 'titleEN', $dataOrder = 'asc', $paginate = 10, $search = '';

    public function getDiary(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('greendiary')
                        ->select('id', 'titleEN', 'tags', 'img', 'isActive')
                        ->where('titleEN', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function render()
    {
        $diary = $this->getDiary();
        return view('livewire.cms-diari-component', compact('diary'));
    }

}
