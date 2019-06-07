@extends('master.main')

@section('content')
<section class="ftco-section ftco-no-pt ftco-featured-model">
    <div class="container-fluid">
        <div class="row">
            @foreach ($ListProducts as $item)
            <div class="col-md-6 col-lg-3">
                <div class="model-entry">
                    {{-- hình ảnh --}}
                    <div class="model-img" style="background-image: url({{ asset('images') }}/{{$item->image}});">
                        <div class="name text-center">
                            {{-- tên sản phẩm --}}
                            <h3><a href="model-single.html">{{$item->name}}</a></h3>
                        </div>
                        <div class="text text-center">
                            {{-- tên và hãng sản phẩm --}}
                            <h3><a href="model-single.html">{{$item->name}}</a></h3>
                            <div class="d-flex models-info">
                                <div class="box">
                                    <p>Detail</p>
                                    <span><a href="single/{{$item->id_products}}"><i
                                                class="fas fa-info-circle"></i></a></span>
                                </div>

                                <div class="box">
                                    <p>Add Cart</p>
                                    <span><a href="addOne/{{$item->id_products}}"> <i class="fas fa-shopping-cart"></i>
                                        </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-4">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-3 d-flex align-items-center ftco-animate">
                <div class="heading-section text-center">
                    <h2 class="">Products in store</h2>
                </div>
            </div>
            @foreach ($ListProductsHome as $item)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="model-entry">
                    <div class="model-img" style="background-image: url({{ asset('images') }}/{{$item->image}});">
                        <div class="name text-center">
                            <h3><a href="single/{{$item->id_products}}">{{$item->name}}</a></h3>
                        </div>
                        <div class="text text-center">
                            <h3><a href="single/{{$item->id_products}}">{{$item->name}}</a></h3>
                            <div class="d-flex models-info">
                                <div class="box">
                                    <p>Detail</p>
                                    <span><a href="single/{{$item->id_products}}"><i
                                                class="fas fa-info-circle"></i></a></span>
                                </div>

                                <div class="box">
                                    @if (Session::has("roles") == "")
                                    <p>Need Login</p>
                                    <span><a href="login"> <i class="fas fa-sign-in-alt"></i> </a></span>
                                    @else
                                    <p>Add Cart</p>
                                    <span><a href="addOne/{{$item->id_products}}"> <i class="fas fa-shopping-cart"></i>
                                        </a></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection