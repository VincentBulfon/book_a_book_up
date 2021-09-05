<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class AppMenu extends Component
{
    public $name;
    public $firstname;

    public function mount(Request $request)
    {
        $this->name = $request->user()->name;
        $this->firstname = $request->user()->firstname;
    }

    public function render()
    {
        return view('livewire.app-menu');
    }
}
