@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>Order num : {{$order->id}}</h3>
            <h3>Made on : {{$order->created_at}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="col-sm-4">Name</th>
                    <th class="col-sm-4">File</th>
                    <th class="col-sm-2">Price</th>
                </tr>
                </thead>
                @foreach($order->orderItems as $item)
                    <tr>
                        <td>{{$item->product->name}}</td>
                        <td><a href="/download/{{$order->id}}/{{$item->file->filename}}"> {{$item->file->filename}}</a></td>
                        <td>$ {{number_format($item->product->price,2,',','')}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection