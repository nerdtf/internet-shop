@extends('layouts.admin')

@section('main_content')

    <form action="/admin/products" method="post" enctype="multipart/form-data">

        @include('layouts.embed.errors')

        {{csrf_field()}}

        {{method_field('put')}}

        <legend>Create Product</legend>

        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control"  type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="slug">Slug:</label>
            <input class="form-control"  type="text" name="slug" id="slug">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input class="form-control"  type="number" name="price" id="price">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload image:</label>
            <input class="form-control"  type="file" name="image" id="image">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>

    </form>

@endsection