<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use App\Page;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index')->with(compact('pages'));
    }

    public function create(){
        return view('admin.pages.create');
    }

    public function store(){

        $this->validate(request(),[
            'title' => 'required|max:50',
            'slug' => 'required|unique:pages,slug',
            'intro' => 'required',
            'content' => 'required'
        ]);

        Page::create(request()->post());

        request()->session()->flash('status', 'Page successfully created');

        return redirect('/admin/pages');
    }
    public function show(Page $page){
        return view('admin.pages.show')->with(compact('page'));
    }

    public function edit(Page $page){
        return view('admin.pages.edit')->with(compact('page'));
    }

    public function update(Page $page){
        $this->validate(request(),[

            'title' => 'required',
            'slug' => 'required',
            'intro' => 'required',
            'content' => 'required'
        ]);
        $page->update(request()->post());

        request()->session()->flash('status', 'Page edited successfully');

        return redirect('/admin/pages');
    }


    public function delete(Page $page){
        return view('admin.pages.delete')->with(compact('page'));
    }

    public function destroy(Page $page)
    {
        $page->delete();
        request()->session()->flash('status', 'Page deleted successfully');
        return redirect('/admin/pages');
    }
}
