<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BodyComponent extends Component
{
    public function render()
    {
        return view('livewire.body-component')->layout('layouts.base');
    }
}
