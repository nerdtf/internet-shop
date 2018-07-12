@extends('layouts.admin')


@section('main_content')
    <h1 class="display-3">{{$product->title}}</h1>
    <div class="col-md-12">
        <img src="{{'/uploads/'.$product->image}}" class="rounded mx-auto d-block img-thumbnail" width="389" height="422" alt="Responsive image">

    </div>
    <div class="col-md-12">
        <dl class="row">
            <dt class="col-sm-3 h3">Description:</dt>
            <dd class="col-sm-9">{{$product->description}}</dd>

            <dt class="col-sm-3 h3">Price:</dt>
            <dd class="col-sm-9 text-success">
                <p class = "h5">{{$product->price}}</p>
            </dd>
        </dl>
        <div class="btn-group btn-group-lg" role="group" >
            <a class="btn btn-danger" href="/admin/products/{{$product->slug}}/edit" role="button">Edit &raquo;</a>
            <a class="btn btn-warning" href="/admin/products/{{$product->slug}}/delete" role="button">Delete &raquo;</a>
            <a class="btn btn-success" role="button" href="/admin/products">Back</a>
        </div>
    </div>
@endsection