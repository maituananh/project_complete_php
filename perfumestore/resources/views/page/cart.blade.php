@extends('master.main')

@section('content')
<style>
    table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>

    <table style="width:100%">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Carrier</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>TotalMoney</th>
        </tr>

        @foreach ($cart as $item) 
            <tr>
                <td><img style="width: 100px; height: 100px;" src="{{ asset('images') }}/{{$item->image}}"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->Name}}</td>
                <td>{{$item->price}}.000 VND</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->totalMoney}}.000 VND</td>
            </tr>
        @endforeach

    </table>

@endsection