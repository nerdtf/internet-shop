<?php

namespace App\Http\Controllers\admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function index(){
        $comments = DB::table('comments')->get();
        return view('admin.comments.index')->with(compact('comments'));
    }

    public function destroy(Comment $comment){
        $comment->delete();
        request()->session()->flash('status', 'Comment successfully deleted');
        return redirect('admin/comments');
    }
}
