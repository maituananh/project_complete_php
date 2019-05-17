
@extends('masterPage.cuaHangMain')

@section('content')
<div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-forth text-left px-4">
                            <span>Product Details</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Price</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Quantity</span>
                        </div>
                        <div class="one-eight text-center px-4">
                            <span>Remove</span>
                        </div>
                    </div>
                    @foreach ($HANG as $item)
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <div class="product-img" style="background-image: url({{ asset('images') }}/{{$item->hinhAnh}});">
                                </div>
                                <div class="display-tc">
                                    <h3>{{$item->ten}}</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">${{$item->gia}}.000</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <a href="/ProjectShoesStoreLaravel/public/hanghoa/deleteIdGioHang/{{$item->idChiTietGioHang}}" class="closed"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                    <h2>Related Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                            <span class="price">$139.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">Women's Minam Meaghan</a></h2>
                            <span class="price">$139.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">Men's Taja Commissioner</a></h2>
                            <span class="price">$139.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">Russ Men's Sneakers</a></h2>
                            <span class="price">$139.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="colorlib-product">
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
                        <div class="delete" style="background-color: red">
                            <a href="/ProjectShoesStoreLaravel/public/hanghoa/deleteIdGioHang/{{$item->idChiTietGioHang}}" style="background-color: white">
                                <i class="fas fa-trash-alt"></i>
                                DELETE
                            </a>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </div> --}}
@endsection
