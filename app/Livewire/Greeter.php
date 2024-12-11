<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate(['required', 'min:2'], onUpdate: false)]
    public $name = '';

    public $greeting = '';

    public $greetingMessage = '';

    public function changeGreeting()
    {
        $this->reset('greetingMessage');

        $this->validate();

        $this->greetingMessage = "{$this->greeting}, {$this->name}";
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
