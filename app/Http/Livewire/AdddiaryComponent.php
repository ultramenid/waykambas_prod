<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AdddiaryComponent extends Component
{
    use WithFileUploads;
    public $tags = [], $urlfiles = [];
    public $photo, $imgDescEN,$imgDescID, $publishdate, $titleID, $titleEN;
    public $mediafile, $urlfile, $isactive = 1;

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();

        $manager = new ImageManager();

        // https://image.intervention.io/v2/api/fit
        //crop the best fitting 1:1 ratio (200x200) and resize to 200x200 pixel
        $image = $manager->make('storage/files/photos/'.$foto)->fit(600, 360);
        $image->save('storage/files/photos/thumbnail/'.$foto);
        return $foto;
    }

    public function updatedPhoto($photo){
        $extension = pathinfo($photo->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['png', 'jpeg', 'bmp', 'gif','jpg','webp'])) {
           $this->reset('photo');
           $message = 'Files not supported';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }elseif($photo->getSize() > 8097152){
           $this->reset('photo');
           $message = 'Files must not be greater than 8MB';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }
    }

    public function storediary(){
            if($this->manualValidation()){
                DB::table('greendiary')->insert([
                    'publishdate' => $this->publishdate,
                    'img' => $this->uploadImage(),
                    'imgDescEN' => $this->imgDescEN,
                    'imgDescID' => $this->imgDescID,
                    'titleEN' => $this->titleEN,
                    'titleID' => $this->titleID,
                    'isActive' => $this->isactive,
                    'slugEN' => Str::slug($this->titleEN,'-'),
                    'slugID' => Str::slug($this->titleID,'-'),
                    'created_at' => Carbon::now('Asia/Jakarta')
                ]);
                redirect()->to('/cms/cmsdiary');
            }

    }

    public function render()
    {
        return view('livewire.adddiary-component');
    }
    public function manualValidation(){
        if($this->publishdate == ''){
            $message = 'Publish date is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->photo == ''){
            $message = 'Image is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->imgDescEN== ''){
            $message = 'Image description  english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->imgDescEN) > 155){
            $message = 'Image description  max limit 155 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->imgDescID== ''){
            $message = 'Image description  indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->imgDescID) > 155){
            $message = 'Image description  max limit 155 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleEN) > 60){
            $message = 'Title english max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleID == ''){
            $message = 'Title indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleEN == ''){
            $message = 'Title English is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleID) > 120){
            $message = 'Title indonesia max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
