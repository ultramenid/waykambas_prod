<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PageSilvikulturComponent extends Component
{
    public $textsilvikulturEN, $textsilvikulturID;

    public function mount(){
        $data = DB::table('pagesilvikultur')->where('id', 1)->first();
        if($data){
            $this->textsilvikulturEN = $data->textsilvikulturEN;
            $this->textsilvikulturID = $data->textsilvikulturID;
        }else{
            $this->textsilvikulturEN = '';
            $this->textsilvikulturID = '';
        }
    }
    public function storesilvikultur(){
        if($this->manualValidation()){
            DB::table('pagesilvikultur')
            ->updateOrInsert(
                ['name' => 'silvikultur', 'id' => 1],
                [
                    'textsilvikulturEN' => $this->textsilvikulturEN,
                    'textsilvikulturID' => $this->textsilvikulturID,
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
        return view('livewire.page-silvikultur-component');
    }

    public function manualValidation(){
        if($this->textsilvikulturEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textsilvikulturID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
