<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditAzComponent extends Component
{
    // public $idaz, $titleEN, $titleID, $azEN, $azID;
    public $idaz, $titleEN, $titleID, $azEN, $azID, $category, $is_active;
    public function mount($idaz){
        $this->idaz = $idaz;
        $data = DB::table('azrestoration')->where('id', $idaz)->first();
        $this->titleEN = $data->titleEN;
        $this->titleID = $data->titleID;
        $this->azEN = $data->azEN;
        $this->azID = $data->azID;
        $this->category = $data->category;
        $this->is_active = $data->isActive;
    }

    public function storeaz(){
        if($this->manualValidation()){
            DB::table('azrestoration')
            ->where('id', $this->idaz)
            ->update([
                'titleEN' => $this->titleEN,
                'titleID' => $this->titleID,
                'azEN' => $this->azEN,
                'azID' => $this->azID,
                'isActive' => $this->is_active,
                'category' => $this->category,
                'updated_at' => Carbon::now('Asia/Jakarta')
            ]);
            //passing to toast
            $message = 'Successfully editing A-Z Restoration';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.edit-az-component');
    }
    public function manualValidation(){
        if($this->titleEN == ''){
            $message = 'Title english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleID == ''){
            $message = 'Title indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->azEN == ''){
            $message = 'Content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->azID == ''){
            $message = 'Content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
