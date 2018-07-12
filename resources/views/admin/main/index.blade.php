@extends('layouts.admin')

@section('main_content')
    <div class="col-md-12">
        <h1 class = "text-center">
            <strong>Welcome to admin panel</strong>
        </h1>
        <div class="text-center">
            <a class="btn btn-success" href="/admin/pages/create" role="button" >Create page</a>

            <a class="btn btn-warning" href="/admin/products/create" role="button">Create product</a>
        </div>

    </div>
@endsection