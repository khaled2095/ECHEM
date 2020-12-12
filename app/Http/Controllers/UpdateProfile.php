<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UpdateProfile extends Controller
{
    public function index()
    {
        # code...
        $user = User::where('id', auth()->id())->first();
        $user->name = request('name');
        $user->phone = request('phone');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        return redirect()->route('home');
    }
}
