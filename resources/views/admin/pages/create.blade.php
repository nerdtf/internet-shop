@extends('layouts.admin')


@section('main_content')

    <form action="/admin/pages" method="post">

        @include('layouts.embed.errors')

        {{csrf_field()}}

        {{method_field('put')}}
        <legend><h1 class="display-3">Create Page:</h1></legend>
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" value="{{old('title')}}" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="slug">Slug:</label>
            <input class="form-control" value="{{old('slug')}}" type="text" name="slug" id="slug">
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control"  type="text" name="intro" id="intro">{{old('intro')}}</textarea>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" name="content" id="content">{{old('content')}}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>

    </form>
@endsection