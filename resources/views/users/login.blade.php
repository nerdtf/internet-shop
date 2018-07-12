@extends('layouts.main')

@section('jumbotron')
    <h1 class="display-3">Login</h1>
@endsection

@section('main_content')
    <form action="/session" method="post">

        @include('layouts.embed.errors')
        {{csrf_field()}}

        <div class="form-group">
            <label for="email">Email:</label>
            <input required type="email" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input required type="password" id="password" name="password" class="form-control">
        </div>


        <div class="form-group">
            <button class="btn btn-success">Login</button>
        </div>
    </form>
@endsection