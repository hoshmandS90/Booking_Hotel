<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\Room;

class View extends Component
{


    public $single_room;

    public function mount(Room $room)
    {
        $this->single_room = $room;

    }

    public function render()
    {
        return view('pages.view')->extends('layouts.master');
    }
}
