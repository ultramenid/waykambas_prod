<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PageSiteplanComponent extends Component
{
    public $textsiteplanEN, $textsiteplanID;

    public function mount(){
        $data = DB::table('pagesiteplan')->where('id', 1)->first();
        if($data){
            $this->textsiteplanEN = $data->textsiteplanEN;
            $this->textsiteplanID = $data->textsiteplanID;
        }else{
            $this->textsiteplanEN = '';
            $this->textsiteplanID = '';
        }
    }
    public function storesiteplan(){
        if($this->manualValidation()){
            DB::table('pagesiteplan')
            ->updateOrInsert(
                ['name' => 'siteplan', 'id' => 1],
                [
                    'textsiteplanEN' => $this->textsiteplanEN,
                    'textsiteplanID' => $this->textsiteplanID,
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
        return view('livewire.page-siteplan-component');
    }

    public function manualValidation(){
        if($this->textsiteplanEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textsiteplanID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
