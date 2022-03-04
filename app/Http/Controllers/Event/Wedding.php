<?php

namespace App\Http\Controllers\Event;

use Livewire\Component;

class Wedding extends Component
{
    public function render()
    {
        return view('event.wedding')->extends('layouts.master');
    }
}
