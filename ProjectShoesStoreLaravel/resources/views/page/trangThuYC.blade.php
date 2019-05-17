
@extends('masterPage.cuaHangMain')

@section('content')
<div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-eight text-center" >
                            <span>ID Request</span>
                        </div>
                        <div class="one-eight text-center" style="margin-left: 10%;">
                            <span>ID Product</span>
                        </div>
                        <div class="one-eight text-center" style="margin-left: 10%;">
                            <span>SoLuong</span>
                        </div>
                        <div class="one-eight text-center" style="margin-left: 10%;">
                            <span>Content Request</span>
                        </div>
                        <div class="one-eight text-center" style="margin-left: 10%;">
                            <span>Content Rep</span>
                        </div>
                    </div>
                    @foreach ($TLYC as $item)
                        <div class="product-cart d-flex">
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <h3>{{$item->idYeuCauCH}}</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center" style="margin-left: 10%;">
                                <div class="display-tc">
                                    <span class="price">{{$item->MaSPYC}}</span>
                                </div>
                            </div>
                            <div class="one-eight text-center" style="margin-left: 10%;">
                                <div class="display-tc">
                                    <span class="price">{{$item->soLuong}}</span>
                                </div>
                            </div>
                            <div class="one-eight text-center" style="margin-left: 10%;">
                                <div class="display-tc">
                                    <span class="price">{{$item->noiDung}}</span>
                                </div>
                            </div>
                            <div class="one-eight text-center" style="margin-left: 10%;">
                                <div class="display-tc">
                                    <span class="price">{{$item->noiDungTLYC}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
