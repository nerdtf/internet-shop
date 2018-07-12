@extends('layouts.admin')



@section('main_content')
    <h2 class="text-center display-3">{{$page->title}}</h2>

    <div class="col-md-12">
        <p class="h3 text-dark"> <strong>{{$page->intro}}</strong></p>
        <pre><p class="text-justify  text-secondary">{{$page->content}}</p></pre>
        <p><a class="btn btn-success btn-lg" role="button" href="/admin/pages">Back</a></p>
        <p><a class="btn btn-danger btn-lg" href="/admin/pages/{{$page->slug}}/edit" role="button">Edit &raquo;</a></p>
        <p><a class="btn btn-warning btn-lg" href="/admin/pages/{{$page->slug}}/delete" role="button">Delete &raquo;</a></p>
    </div>

@endsection