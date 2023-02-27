<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PageWaykambasComponent extends Component
{
    public $textwaykambasEN, $textwaykambasID;

    public function mount(){
        $data = DB::table('pagewaykambas')->where('id', 1)->first();
        if($data){
            $this->textwaykambasEN = $data->textwaykambasEN;
            $this->textwaykambasID = $data->textwaykambasID;
        }else{
            $this->textwaykambasEN = '';
            $this->textwaykambasID = '';
        }
    }
    public function storewaykambas(){
        if($this->manualValidation()){
            DB::table('pagewaykambas')
            ->updateOrInsert(
                ['name' => 'waykambas', 'id' => 1],
                [
                    'textwaykambasEN' => $this->textwaykambasEN,
                    'textwaykambasID' => $this->textwaykambasID,
                ]
            );
        //passing to toast
        $message = 'Successfully updating page Way kambas';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.page-waykambas-component');
    }

    public function manualValidation(){
        if($this->textwaykambasEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textwaykambasID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
