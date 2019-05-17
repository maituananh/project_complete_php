@extends('masterPage.cuaHangMain')

@section('content')
    @if ( Session::has('thongBaoMuaHang') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>{{ Session::get('thongBaoMuaHang') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    @endif
		    <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="bread"><span><a href="index.html">Home</a></span> / <span>Product Details</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php $dem = 0; ?>
            @foreach ($joinSanPham as $item) 
                <?php $dem++; ?>
            @endforeach
                
            <form action="/ProjectShoesStoreLaravel/public/hanghoa/muahang" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div style="display: none">
                    <input name="MaSP" value="{{$item->MaSP}}" />
                    <input name="gia" value="{{$item->gia}}" />
                    <input name="soLuongChinh" value="{{$item->soLuong}}" />
                </div>
                <div class="colorlib-product">
                    <div class="container">
                    <div class="row row-pb-lg product-detail-wrap">
                        <div class="col-sm-8">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                        <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-desc">
                                <h3>{{$item->ten}} (Quantity: {{$item->soLuong}})</h3>
                                    <p class="price">
                                        <span>${{$item->gia}}.000</span>
                                    </p>
                                    <p>{{$item->moTa}}.</p>
                                    <div class="size-wrap">
                                        <div class="block-26 mb-2">
                                            <h4>Size</h4> 
                                            <ul>
                                                <?php $luu = $dem/2; $dem2 = 0; ?>
                                                @foreach ($joinSanPham as $item) 
                                                    @if ($dem2 < $luu)
                                                        <li><a href="#">{{$item->tenSize}}</a></li>
                                                        <?php $dem2++; ?>
                                                    @endif
                                                @endforeach 
                                            </ul>
                                            <input type="text" name='tenSize' placeholder="input number size" class="form-control input-number"/>
                                    </div>
                                    <div class="block-26 mb-4">
                                        <h4>Color</h4>
                                        <ul>
                                            <?php
                                                $sole = 1;
                                            ?>
                                            @foreach ($joinSanPham as $item)
                                                @if ($sole%2 != 0)
                                                    <li><a href="#">{{$item->tenMau}}</a></li>
                                                @endif        
                                                <?php 
                                                    $sole++;
                                                ?>
                                            @endforeach
                                        </ul>
                                        <input type="text" name='mau' placeholder="input name color" class="form-control input-number"/>
                                    </div>
                                </div>
                                
                            <div class="input-group mb-4">
                                <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="5">
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    @if (Session::has("usersName") != "")
                                        {{-- <p class="addtocart"><a href="/ProjectShoesStoreLaravel/public/hanghoa/muahang/{{$item->MaSP}}/{{$item->soLuong}}/{{$item->gia}}" class="btn btn-primary btn-addtocart"><i class="fas fa-coins"></i> Buy now</a></p>
                                        <p class="addtocart"><button type="submit" name="addtocart" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</button></p>--}}
                                        <p class="addtocart"><a href="/ProjectShoesStoreLaravel/public/hanghoa/themSPGioHang/{{$item->MaSP}}/{{$item->soLuong}}/{{$item->gia}}" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
                                        <p class="addtocart"><input type="submit" value="Buy now" name="buynow" class="btn btn-primary btn-addtocart"></p>
                                    @else
                                        <p class="addtocart"><a href="/ProjectShoesStoreLaravel/public/dangnhap/trangDangNhap" class="btn btn-primary btn-addtocart"><i class="fas fa-ban"></i>Need Sign In</a></p>
                                    @endif   
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
@endsection

@section('scriptfooter')
     <script>
         $(document).ready(function(){
 
         var quantitiy=0;
            $('.quantity-right-plus').click(function(e){
                 
                 // Stop acting like a button
                 e.preventDefault();
                 // Get the field name
                 var quantity = parseInt($('#quantity').val());
                 
                 // If is not undefined
                     
                     $('#quantity').val(quantity + 1);
 
                   
                     // Increment
                 
             });
 
              $('.quantity-left-minus').click(function(e){
                 // Stop acting like a button
                 e.preventDefault();
                 // Get the field name
                 var quantity = parseInt($('#quantity').val());
                 
                 // If is not undefined
               
                     // Increment
                     if(quantity>0){
                     $('#quantity').val(quantity - 1);
                     }
             });
             
         });
     </script>
@endsection