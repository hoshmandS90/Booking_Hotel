<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use App\Models\booking;
class Book extends Component
{


    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $perfer_method;
    public $number_of_guests;
    public $number_of_rooms;
    public $check_in;
    public $check_out;

    public $additional_comments;

    public function save(){
       $Validation_Data= $this->Validate([
            'first_name' => 'required|min:3|max:25',
            'last_name' => 'required|min:3|max:25',    
            'email' => 'required|email|unique:bookings',
            'phone' => 'required|max:20',
            'perfer_method' => 'required',
            'number_of_guests' => 'required',
            'number_of_rooms' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',

            'additional_comments' => 'required|max:255',

        ]);
    



        booking::create($Validation_Data);
        notyf()->livewire()->position('y','top')->addSuccess('booking added successfully');
        $this->ResetInput();
        return redirect()->back();
        

        
    }
    public function ResetInput(){
        $this->first_name='';
        $this->last_name='';
        $this->email='';
        $this->phone='';
        $this->perfer_method='';
        $this->number_of_guests='';
        $this->number_of_rooms='';
        $this->check_in='';
        $this->check_out='';
        $this->additional_comments='';

    }
    public function render()
    {
        return view('components.book')->extends('layouts.master');
    }
}
