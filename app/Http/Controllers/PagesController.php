<?php

namespace App\Http\Controllers;

use App\Page;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('pages.index')->with(compact('pages'));
    }
    public function show(Page $page){

        return view('pages.show')->with(compact('page'));
    }
}
