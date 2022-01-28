<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\Room;
class Rooms extends Component
{
    public function render()
    {

        $Rooms=Room::latest()->get();
        return view('pages.rooms',compact('Rooms'))->extends('layouts.master');
    }
}
