
@extends('masterPage.cuaHangMain')

@section('content')
    <div class="colorlib-product">
        <div class="container">
            @if ( Session::has('yeucau') )
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('yeucau') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <div class="row row-pb-md">
            @foreach ($HANG as $item)
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="/ProjectShoesStoreLaravel/public/trangChiTietSanPham/{{$item->MaSPCH}}" class="prod-img">
                        <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">{{$item->ten}} (Quantity: {{$item->soLuong}})</a></h2>
                            <span class="price">${{$item->gia}}.000</span>
                        </div>
                        <div style="background-color: tomato;">
                            <a style="color: white " href="trangFormYCSP/{{$item->MaSPCH}}/{{$item->hinhAnh}}">Request Product</a>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </div>
@endsection
