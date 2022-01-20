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
    public $deleteName, $deleteID, $deleter;
    public $dataField = 'titleEN', $dataOrder = 'asc', $paginate = 10, $search = '';

    public function getDiary(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('greendiary')
                        ->select('id', 'titleEN', 'img')
                        ->where('titleEN', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }
    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('greendiary')->where('id', $id)->first();
        $this->deleteName = $dataDelete->titleEN;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('greendiary')->where('id', $id)->delete();

        $message = 'Successfully deleting internal news';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }
    public function render()
    {
        $diary = $this->getDiary();
        return view('livewire.cms-diari-component', compact('diary'));
    }

}
