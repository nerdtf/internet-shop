@extends('layouts.main')

@section('jumbotron')
    <h1 class="display-3">Cart</h1>
@endsection


@section('main_content')
    <div class="col-md-12">
        <h2>Selected products:</h2>
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Total price</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="/cart/{{$product->slug}}/delete" class="btn btn-warning">-</a>
                        {{$cart[$product->id]}}
                        <a href="/cart/{{$product->slug}}" class="btn btn-success">+</a>

                    </td>
                    <td>{{$cart[$product->id] * $product->price}}</td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="/orders" class="btn btn-success">Make order</a>
        </div>
    </div>

@endsection