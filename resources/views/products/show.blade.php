@extends('layouts.main')

@section('jumbotron')
    <h1 class="text-center display-3">{{$product->title}}</h1>

@endsection

@section('main_content')
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
                <a class="btn btn-lg btn-primary" href="/cart/{{$product->slug}}" role="button">Buy</a>
                <a class = "btn btn-success btn-lg" role="button" href="/">Back</a>
            </div>
    </div>
@endsection