<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('pages.contact')->extends('layouts.master');
    }
}
