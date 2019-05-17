
@extends('masterPage.cuaHangMain')

@section('content')
    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                    <h2>Products search results</h2>
                </div>
            </div>
            <div class="row row-pb-md">
            
            <?php
                $issetSP = 0;
            ?>
            @foreach ($SANPHAM as $item)
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="/ProjectShoesStoreLaravel/public/trangChiTietSanPham/{{$item->MaSP}}" class="prod-img">
                        <img src="{{ asset('images') }}/{{$item->hinhAnh}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">{{$item->ten}}</a></h2>
                            <span class="price">${{$item->gia}}.000</span>
                        </div>
                    </div>
                </div>

                {{-- kiểm tra có sản phẩm hay ko nếu không in thông báo --}}
                @if ($item->MaSP)
                    <?php
                        $issetSP ++;
                    ?>
                @endif
             @endforeach

             @if ($issetSP == 0)
                <h2 style="color:red; margin-left: 35%">The product is out of store</h2>
             @endif

            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                    <h2>Trusted Partners</h2>
                </div>
            </div>
            <div class="row">
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-1.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-2.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-3.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-4.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-5.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
            </div>
        </div>
    </div>
@endsection
