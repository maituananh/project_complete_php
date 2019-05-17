@extends('layout.layout')
@section('content')

<div class="index-banner">
    
</div>

<div class="main">
    <div class="wrap">
        <div class="content-top">
            <div class="lsidebar span_1_of_c1">

            </div>
            <div class="cont span_2_of_c1">

                <div class="clear"> </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="content-bottom">
            <div class="table">
                    <table border="1px">
                            <tr>
                                <th>UsersName</th>
                                <th>NameProducts</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                    @foreach ($list as $item)
                    <tr>
                            <td>{{$item->name_Users}}</td>
                            <td>{{$item->name}}</td>{{--  tên sản phẩm  --}}
                            <td>{{$item->price}}</td>
                            <td><img src="{{URL::asset('image')}}/{{$item->image}}" alt="" /></td>
                            <td><a href="deleteBag/{{$item->id}}">DELETE</a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</div>
@endsection