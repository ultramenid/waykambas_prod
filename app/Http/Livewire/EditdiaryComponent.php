<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditdiaryComponent extends Component
{
    use WithFileUploads;
    public $idDiary, $filetypeupload = 1;
    public $urlfiles = [];
    public $uphoto, $imgDescEN,$imgDescID, $publishdate, $titleID, $titleEN, $photo, $isactive;

    public function mount($idDiary){
        $this->idDiary = $idDiary;
        $data = DB::table('greendiary')->where('id', $idDiary)->first();
        $this->titleEN = $data->titleEN;
        $this->titleID = $data->titleID;
        $this->isactive = $data->isActive;
        $this->publishdate = $data->publishdate;
        $this->imgDescEN = $data->imgDescEN;
        $this->imgDescID = $data->imgDescID;
        $this->uphoto = $data->img;
    }

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();


        return $foto;
    }

    public function updatedPhoto($photo){
        $extension = pathinfo($photo->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['png', 'jpeg', 'bmp', 'gif','jpg','webp','mp4', 'avi', '3gp', 'mov', 'm4a'])) {
           $this->reset('photo');
           $message = 'Files not supported';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }elseif (in_array($extension, ['mp4', 'avi', '3gp', 'mov', 'm4a'])) {
            $this->filetypeupload = 2;
         }
    }

    public function storediary(){
        if($this->manualValidation()){
            if(!$this->photo){
                $name = $this->uphoto;
            }else{
                try {
                    unlink(storage_path('app/public/files/photos/'.$this->uphoto));
                     unlink(storage_path('app/publicfiles/photos/thumbnail/'.$this->uphoto));
                     $name=  $this->uploadImage();
                } catch (\Throwable $th) {
                   $name=  $this->uploadImage();
                }

            }
            DB::table('greendiary')
            ->where('id', $this->idDiary)
            ->update([
                'publishdate' => $this->publishdate,
                    'img' => $name,
                    'imgDescEN' => $this->imgDescEN,
                    'imgDescID' => $this->imgDescID,
                    'titleEN' => $this->titleEN,
                    'titleID' => $this->titleID,
                    'isActive' => $this->isactive,
                    'slugEN' => Str::slug($this->titleEN,'-'),
                    'slugID' => Str::slug($this->titleID,'-'),
                    'updated_at' => Carbon::now('Asia/Jakarta')
            ]);

            //passing to toast
            $message = 'Successfully updating diary';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.editdiary-component');
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
        }elseif(strlen($this->imgDescEN) > 500){
            $message = 'Image description  max limit 500 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->imgDescID== ''){
            $message = 'Image description  indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->imgDescID) > 500){
            $message = 'Image description  max limit 500 character';
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
        }
        return true;
    }
}
