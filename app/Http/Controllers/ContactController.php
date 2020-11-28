<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    //
    public function index(){
        
        return view('contact');
    }
    public function store(){
        $name =request('name');
        $email =request('email');
        $msg =request('msg');

        $contact = new Contact();

        $contact->name = $name;
        $contact->email = $email;
        $contact->msg = $msg;
        $contact->save();
        return Redirect::to('home');
    }
    
}
