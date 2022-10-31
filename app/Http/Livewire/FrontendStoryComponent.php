<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FrontendStoryComponent extends Component
{
    public function getStory(){
        return DB::table('featurestory')
        ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->Limit(5)
        ->orderBy('publishdate', 'desc')
        ->get();
    }
    public function render()
    {
        $story = $this->getStory();
        return view('livewire.frontend-story-component', compact('story'));
    }
}
