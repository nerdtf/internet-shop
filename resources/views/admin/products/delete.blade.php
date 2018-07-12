@extends('layouts.admin')


    {{--<h1 class="display-3">{{$product->title}}</h1>
    <p>{{$product->price}}</p>--}}


@section('main_content')
    <div class="col-md-12">
        <form action="/admin/products/{{$product->slug}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
            <h2>Are you sure you want to delete <b>{{$product->title}}</b>?</h2>
            <div class="form-group">
                <button class="btn btn-danger">YES</button>
                <a class="btn btn-warning" href="/admin/products/index">NO</a>
            </div>
        </form>
    </div>
@endsection