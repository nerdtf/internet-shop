@extends('layouts.admin')

@section('main_content')
    <div class="col-md-12">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Products</th>
                <th>Summary price</th>
            </tr>

            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->customer_name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                    <td>
                        <ul>
                            @foreach($order->products as $product)
                                <li>
                                    {{$product->title}}
                                     x {{$product->pivot->amount}}
                                    <form style="display: inline-block"  method="post" action="/admin/orders/{{$order->id}}/{{$product->slug}}">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}
                                        <button class="btn btn-danger btn-sm"
                                                type="submit">delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @foreach($order->products as $product)
                            <li>
                            {{$product->pivot->amount * $product->price}}
                            </li>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection