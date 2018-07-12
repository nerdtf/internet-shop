<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function index(){
        return view('admin.main.index');
    }
}
