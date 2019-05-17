
@extends('masterPage.cuaHangMain')

@section('content')
    <div class="colorlib-product">
        <div class="container">

            <div class="row row-pb-md">
            @foreach ($HANG as $item)
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="/ProjectShoesStoreLaravel/public/trangChiTietSanPham/{{$item->MaSP}}" class="prod-img">
                        <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">{{$item->ten}} (Quantity: {{$item->soLuong}})</a></h2>
                            <span class="price">${{$item->gia}}.000</span>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </div>
    
    <div class="row row-pb-lg">
        <div class="col-md-12">
            <div class="total-wrap">
                <div class="row">
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="total">
                            <div class="sub">
                                <p><span>Name</span> <span>Price</span></p>
                                <?php 
                                    $tongGia = 0;
                                ?>
                                @foreach ($HANG as $itemprice)
                                    <p><span>{{$itemprice->ten}}</span> <span>${{$itemprice->gia}}.000</span></p>
                                    <?php
                                        $tongGia = $tongGia + $itemprice->gia;
                                    ?>
                                @endforeach
                            </div>
                            <div class="grand-total">
                                <p><span><strong>Total:</strong></span> <span><?php echo "$".$tongGia.".000" ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
