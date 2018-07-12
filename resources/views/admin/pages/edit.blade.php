@extends('layouts.admin')


@section('main_content')

    <form action="/admin/pages/{{$page->slug}}" method="post">

        {{csrf_field()}}

        <legend><h1 class="display-3">Edit Page</h1></legend>

        <div class="form-group">
            <label for="title">Title: </label>
            <input class="form-control" value="{{$page->title}}" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="slug">Slug:</label>
            <input class="form-control" value="{{$page->slug}}" type="text" name="slug" id="slug">
        </div>


        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea class="form-control" name="intro" id="intro">{{$page->intro}}</textarea>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control"  name="content" id="content">{{$page->content}}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection