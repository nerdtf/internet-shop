<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => request()->post('name'),
            'email' => request()->post('email'),
            'password' => bcrypt(request()->post('password')),
        ]);
        auth()->login($user);

        return redirect('/');
    }
}
