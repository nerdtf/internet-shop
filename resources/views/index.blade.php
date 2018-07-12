@extends('layouts.main')

@section('main_content')
    @foreach($products as $product)
        <div class="col-md-4 ">
            <p class="text-center">
                <img src="uploads/{{$product->image}}"  class="rounded" width="230" height="200">
            </p>
            <h2 class="text-primary">{{ $product->title }}</h2>
            <p class="bg-dark text-white">{{ $product->description }}</p>
            <p class="text-center"><a class="btn btn-success" href="/products/{{$product->slug}}" role="button">View details &raquo;</a></p>
        </div>
    @endforeach

@endsection

@section('jumbotron')

        <h1 class="display-3 text-center" >Choose your camera!</h1>

@endsection