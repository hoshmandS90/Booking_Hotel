<?php

namespace App\Http\Controllers;

use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        return view('service')->extends('layouts.master');
    }
}
