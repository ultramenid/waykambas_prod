<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CmsAzComponent extends Component
{
    public $deleteName, $deleteID, $deleter;
    public $dataField = 'titleEN', $dataOrder = 'asc', $paginate = 10, $search = '';
    public function getAz(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('azrestoration')
                        ->select('id', 'titleEN')
                        ->where('titleEN', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('azrestoration')->where('id', $id)->first();
        $this->deleteName = $dataDelete->titleEN;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('azrestoration')->where('id', $id)->delete();

        $message = 'Successfully deleting internal news';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }
    public function render()
    {
        $az = $this->getAz();
        return view('livewire.cms-az-component', compact('az'));
    }
}
