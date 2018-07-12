@extends('layouts.main')

@section('jumbotron')
    <h1>Create order</h1>
@endsection

@section('main_content')
    <div class="col-md-12">

        <form action="/orders" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <ul>
                    @foreach($products as $product)
                        <li>
                            <strong>{{$product->title}}</strong>
                            x {{$cart[$product->id]}}
                            x {{$cart[$product->id] * $product->price}}
                        </li>
                    @endforeach
                </ul>
            </div>

            @include('layouts.embed.errors')

            <div class="form-group">
                <label for="customer_name">Name</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Create order</button>
            </div>
        </form>
    </div>


@endsection