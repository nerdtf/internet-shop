@extends('layouts.main')

@section('jumbotron')
    <br>
    <h1 class="display-4">Registration</h1>
@endsection

@section('main_content')
    <form action="/registration" method="post">

        @include('layouts.embed.errors')

        {{method_field('put')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <input required type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input required type="email" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input required type="password" id="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password one more time:</label>
            <input required type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-success">Register</button>
        </div>
    </form>
@endsection