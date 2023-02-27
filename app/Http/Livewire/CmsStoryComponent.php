<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CmsStoryComponent extends Component
{
    public $deleteName, $deleteID, $deleter;
    public $dataField = 'titleEN', $dataOrder = 'asc', $paginate = 10, $search = '';



    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }
    public function getStory(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('featurestory')
                        ->select('id', 'titleEN', 'img', 'isActive')
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
        $dataDelete = DB::table('featurestory')->where('id', $id)->first();
        $this->deleteName = $dataDelete->titleEN;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('featurestory')->where('id', $id)->delete();

        $message = 'Successfully deleting internal news';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }

    public function render()
    {
        $story = $this->getStory();
        return view('livewire.cms-story-component', compact('story'));
    }
}
