<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PageWhoweareComponent extends Component
{
    public $textwhoweareEN, $textwhoweareID;

    public function mount(){
        $data = DB::table('pagewhoweare')->where('id', 1)->first();
        if($data){
            $this->textwhoweareEN = $data->textwhoweareEN;
            $this->textwhoweareID = $data->textwhoweareID;
        }else{
            $this->textwhoweareEN = '';
            $this->textwhoweareID = '';
        }
    }
    public function storewhoweare(){
        if($this->manualValidation()){
            DB::table('pagewhoweare')
            ->updateOrInsert(
                ['name' => 'whoweare', 'id' => 1],
                [
                    'textwhoweareEN' => $this->textwhoweareEN,
                    'textwhoweareID' => $this->textwhoweareID,
                ]
            );
        //passing to toast
        $message = 'Successfully updating page Who we are';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.page-whoweare-component');
    }

    public function manualValidation(){
        if($this->textwhoweareEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textwhoweareID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
