<?php

namespace App\Http\Controllers;

use Livewire\Component;

class Dining extends Component
{
    public function render()
    {
        return view('dining')->extends('layouts.master');
    }
}
