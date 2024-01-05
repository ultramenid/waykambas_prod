<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddAzComponent extends Component
{
    public $titleEN, $titleID, $azEN, $azID, $category, $is_active = 0;
    public function storeaz(){
        if($this->manualValidation()){
            DB::table('azrestoration')->insert([
                'titleEN' => $this->titleEN,
                'titleID' => $this->titleID,
                'category' => $this->category,
                'azEN' => $this->azEN,
                'azID' => $this->azID,
                'isActive' => $this->is_active,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/cmsaz');
        }
    }


    public function render()
    {
        return view('livewire.add-az-component');
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
        }elseif($this->category == ''){
            $message = 'Category is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
