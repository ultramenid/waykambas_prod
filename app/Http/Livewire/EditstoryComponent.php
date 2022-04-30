<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditstoryComponent extends Component
{
    use WithFileUploads;
    public $idStory;
    public $photo, $imgDescEN,$imgDescID, $publishdate, $titleID, $titleEN, $slug, $uphoto, $isactive;

    public function mount($idStory){
        $this->idStory = $idStory;
        $data = DB::table('featurestory')->where('id', $idStory)->first();
        $this->titleEN = $data->titleEN;
        $this->titleID = $data->titleID;
        $this->slug = $data->slug;
        $this->publishdate = $data->publishdate;
        $this->imgDescEN = $data->imgDescEN;
        $this->imgDescID = $data->imgDescID;
        $this->uphoto =  $data->img ;
        $this->isactive = $data->isActive;
    }

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

    public function storestory(){
        if($this->manualValidation()){
            if(!$this->photo){
                $name = $this->uphoto;
            }else{
                try {
                    unlink(storage_path('app/public/files/photos/'.$this->uphoto));
                     unlink(storage_path('app/public/files/photos/thumbnail/'.$this->uphoto));
                     $name=  $this->uploadImage();
                } catch (\Throwable $th) {
                   $name=  $this->uploadImage();
                }
            }
            DB::table('featurestory')->where('id', $this->idStory)
            ->update([
                'publishdate' => $this->publishdate,
                    'img' => $name,
                    'imgDescEN' => $this->imgDescEN,
                    'imgDescID' => $this->imgDescID,
                    'titleEN' => $this->titleEN,
                    'titleID' => $this->titleID,
                    'isActive' => $this->isactive,
                    'slug' => $this->slug,
                    'updated_at' => Carbon::now('Asia/Jakarta')
            ]);
             //passing to toast
             $message = 'Successfully updating story';
             $type = 'success'; //error, success
             $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.editstory-component');
    }

    public function manualValidation(){
        if($this->publishdate == ''){
            $message = 'Publish date is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->imgDescEN== ''){
            $message = 'Image description  english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->imgDescEN) > 250){
            $message = 'Image description  max limit 250 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->imgDescID== ''){
            $message = 'Image description  indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->imgDescID) > 250){
            $message = 'Image description  max limit 250 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleEN) > 120){
            $message = 'Title english max limit 120 character';
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
            $message = 'Title indonesia max limit 120 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->slug == ''){
            $message = 'Slug is required';
            $type = 'error'; //error, success
            $this->emit('toast', $message, $type);
        }
        return true;
    }
}
