@extends('layouts.admin')

@section('main_content')
        <div class="col-md-12">
            <h1 class=" display-3" >Comments </h1>
        </div>

        <div>
            <table class="text-center table">
                <tr>
                    <th>Comment id</th>
                    <th>Text</th>
                    <th>Created</th>
                    <th>Placed on page</th>
                    <th>Delete</th>
                </tr>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->body}}</td>
                        <td>{{$comment->created_at}}</td>
                        <td>
                            {{$comment->page_id}}
                        </td>

                        <td>
                            <a href="/admin/comments/{{$comment->id}}/destroy" class="btn btn-success">-</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
@endsection

