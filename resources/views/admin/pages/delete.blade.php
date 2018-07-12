@extends('layouts.admin')

@section('main_content')
    <div class="col-md-12">
        <form action="/admin/pages/{{$page->slug}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
            <h2>Are you sure you want to delete <b>{{$page->title}}</b>?</h2>
            <div class="form-group">
                <button class="btn btn-danger">YES</button>
                <a class="btn btn-warning" href="/admin/pages">NO</a>
            </div>
        </form>
    </div>
@endsection