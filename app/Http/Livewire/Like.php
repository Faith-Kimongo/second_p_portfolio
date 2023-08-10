<?php

namespace App\Http\Livewire;

use App\Models\Myhustle;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Like extends Component
{

    public Myhustle $myhustle;
    public int $count;



    public function mount(Myhustle $myhustle)
    {
        $this->myhustle = $myhustle;
        $this->count=$myhustle->likes->count();
    }

    public function like(): void
    {
        // Like
        if ($this->myhustle->isLiked()) {
            // $this->myhustle->removeLike();

            // delete like

            DB::table('likes')->where('user_id',auth()->id())->delete();

    
            $this->count = $this->myhustle->likes()->count();

    
        } elseif (auth()->user()) {
            $this->myhustle->likes()->create([
                'user_id' => auth()->id(),
            ]);

            $this->count = $this->myhustle->likes()->count();

    
        } 
    }
    public function render()
    {
        return view('livewire.like');
    }
}
