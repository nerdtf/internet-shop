@extends('layouts/main')

@section('main_content')
    @foreach($orders as $order)
        <div class="col-md-4">
            <h2><ins>{{ $order->customer_name }}</ins></h2>
            <p><a class="btn btn-secondary" href="/orders/{{$order->id}}" role="button">View details &raquo;</a></p>

        </div>
    @endforeach

@endsection

@section('jumbotron')
    <h1 class="display-3">Our clients: </h1>
@endsection