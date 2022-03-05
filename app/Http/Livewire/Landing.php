<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.landing');
    }

    public function subscribe()
    {
        \Log::debug($this->email);
    }
}
