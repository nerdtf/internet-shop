@extends('layouts.admin')

@section('main_content')
    @foreach($products as $product)
        <div class="col-md-4">
            <h2 class="text-primary">{{ $product->title }}</h2>
            <p class="bg-dark text-white">{{ $product->description }}</p>
            <p><a class="btn btn-success" href="/admin/products/{{$product->slug}}" role="button">View details &raquo;</a></p>
            <p><a class="btn btn-danger" href="/admin/products/{{$product->slug}}/edit" role="button">Edit &raquo;</a></p>
            <p><a class="btn btn-warning" href="/admin/products/{{$product->slug}}/delete" role="button">Delete &raquo;</a></p>
        </div>
    @endforeach

    <a class="btn btn-secondary btn-block" role="button " href="/admin/products/create" >Create product</a>

@endsection
