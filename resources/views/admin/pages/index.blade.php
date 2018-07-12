@extends('layouts.admin')


@section('main_content')
    <style>
        p.clip {
            white-space: nowrap;
            overflow: hidden;
            padding: 3px;
            text-overflow: ellipsis;
        }
    </style>
    @foreach($pages as $page)
        <div class="col-md-4">
            <h2 class="text-primary">{{ $page->title }}</h2>
            <p class="clip text-secondary">{{ $page->intro}}</p>
            <p><a class="btn btn-success" href="/admin/pages/{{$page->slug}}" role="button">View page &raquo;</a></p>
            <p><a class="btn btn-danger" href="/admin/pages/{{$page->slug}}/edit" role="button">Edit &raquo;</a></p>
            <p><a class="btn btn-warning" href="/admin/pages/{{$page->slug}}/delete" role="button">Delete &raquo;</a></p>
        </div>
    @endforeach


    <a class="btn btn-dark btn-block" role="button" href="/admin/pages/create" >Create page</a>

@endsection

