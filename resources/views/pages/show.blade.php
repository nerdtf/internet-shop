@extends('layouts.main')

@section('jumbotron')
    <h2 class="text-center display-3">{{$page->title}}</h2>
@endsection

@section('main_content')
    <div class="col-md-12">
        <p class="h3 text-dark"> <strong>{{$page->intro}}</strong></p>
        <pre><p class="text-justify  text-secondary">{{$page->content}}</p></pre>
    </div>

    <div class="comments col-md-12">
        <ul class="list-group">
            @foreach($page->comments as $comment)
                <li class="list-group-item">
                    {{$comment->created_at->diffForHumans()}}
                    <strong>{{$comment->body}}</strong></li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-12 bg-warning">
        @include('layouts.embed.errors')
        <form action="/pages/{{$page->slug}}/comments" method="post">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="form-group">
                <label for="body">Enter your comment</label>
                <textarea name="body" id="body"  class="form-control">{{old('body')}}</textarea>
            </div>
            <p class = "text-center">
                <button type="submit" class = "btn btn-dark">Post comment</button>
            </p>
        </form>
    </div>
    <button class="btn btn-success btn-lg btn-block"><a class = "text-white" href="/pages">Back</a></button>

@endsection