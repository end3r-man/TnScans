<?php

namespace App\Livewire\Home;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class IndexPg extends Component
{

    #[Title('Home')]
    public function render()
    {
        return view('livewire.home.index-pg');
    }

    public function mount()
    {
    }
}
