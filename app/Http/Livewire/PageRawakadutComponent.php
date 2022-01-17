<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PageRawakadutComponent extends Component
{
    public $textrawakadutEN, $textrawakadutID;

    public function mount(){
        $data = DB::table('pagerawakadut')->where('id', 1)->first();
        if($data){
            $this->textrawakadutEN = $data->textrawakadutEN;
            $this->textrawakadutID = $data->textrawakadutID;
        }else{
            $this->textrawakadutEN = '';
            $this->textrawakadutID = '';
        }
    }
    public function storerawakadut(){
        if($this->manualValidation()){
            DB::table('pagerawakadut')
            ->updateOrInsert(
                ['name' => 'rawakadut', 'id' => 1],
                [
                    'textrawakadutEN' => $this->textrawakadutEN,
                    'textrawakadutID' => $this->textrawakadutID,
                ]
            );
        //passing to toast
        $message = 'Successfully updating page Rawa kadut';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.page-rawakadut-component');
    }
    public function manualValidation(){
        if($this->textrawakadutEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textrawakadutID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
