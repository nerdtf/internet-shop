@extends('layouts/main')

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
            <p class=""><a class="btn btn-success" href="/pages/{{$page->slug}}" role="button">View page &raquo;</a></p>

        </div>
    @endforeach

@endsection

@section('jumbotron')
    <h1 class="text-center display-3">Interesting Pages </h1>

@endsection