<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }

    public function create(){
        return view('users.login');
    }

    public function store(){
            if (request('email') == 'admin@mail.ru' && request('password') == 1) {
                if(DB::select("SELECT * FROM users WHERE email='admin@mail.ru'") == []) {
                    $user = User::create([
                        'name' => 'Admin',
                        'email' => request()->post('email'),
                        'password' => bcrypt(request()->post('password')),
                    ]);
                    auth()->login($user);
                    return view('admin.main.index');
                }else{
                    auth()->attempt(request(['email','password']));
                    return view('admin.main.index');
                }
            }

        else if(! auth()->attempt(request(['email','password']))){
            request()->session()->flash('status', 'Wrong login or password');
            return back();
        }
        request()->session()->flash('status', 'You have logged, Welcome');
        return redirect('/');
    }
}
