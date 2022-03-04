<?php

namespace App\Http\Controllers;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('about')->extends('layouts.master');
    }
}
