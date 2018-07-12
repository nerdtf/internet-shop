@extends('layouts.admin')


@section('main_content')



    <form action="/admin/products/{{$product->slug}}" method="post">

        {{csrf_field()}}

        <legend><h1 class="display-3">Edit Product</h1></legend>

        <div class="form-group">
            <label for="title">Title: </label>
            <input class="form-control" value="{{$product->title}}" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="slug">Slug:</label>
            <input class="form-control" value="{{$product->slug}}" type="text" name="slug" id="slug">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input class="form-control" value="{{$product->price}}" type="number" name="price" id="price">
        </div>


        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control"  name="description" id="description">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload image:</label>
            <input class="form-control"   type="file" name="image" id="image">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection