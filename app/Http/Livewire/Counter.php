<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $number = 1;

    public function increment()
    {
        $this->number = $this->number + 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}