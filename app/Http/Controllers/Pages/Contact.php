<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\SaveContact;
 class Contact extends Component
{


    public $name;
    public $email;
    public $message;


    public function updated($properties){
        $this->ValidateOnly($properties,[
            'name' => 'required|min:3|max:25',
            'email' => 'required|email|unique:save_contacts',
            'message' => 'required|min:10|max:255',   
        ]);
    }

    public function saveContact(){
       
      $validation_data= $this->Validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email|unique:save_contacts',
            'message' => 'required|min:10|max:255',

        ]);
    
        


        SaveContact::create($validation_data);
        notyf()->livewire()->position('y','top')->addSuccess('contact added successfully');
        $this->ResetInput();
        return redirect()->back();

    }
    public function ResetInput(){
        $this->name='';
        $this->email='';
        $this->message='';

    }
    public function render()
    {
        return view('pages.contact')->extends('layouts.master');
    }
}
