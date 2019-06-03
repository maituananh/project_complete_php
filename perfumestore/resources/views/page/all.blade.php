@extends('master.main')

@section('content')
			
    <section class="ftco-section  ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 ftco-animate">
                        <div class="heading-section text-center mb-5">
                            <span class="subheading">Product</span>
                            <h2 class="">All Product In Store</h2>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container-fluid px-4">
            <div class="row d-flex">

                @foreach ($all as $items)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="model-entry">
                            <div class="model-img" style="background-image: url({{ asset('images') }}/{{$items->image}});">
                                <div class="name text-center">
                                    <h3><a href="model-single.html">{{$items->name}}</a></h3>
                                </div>
                                <div class="text text-center">
                                    <h3><a href="model-single.html">{{$items->name}}<br></a></h3>
                                    <div class="d-flex models-info">
                                        <div class="box">
                                            <p>Detail</p>
                                            <span><a href="single/{{$items->id_products}}"><i class="fas fa-info-circle"></i></a></span>
                                        </div>
                                        
                                        <div class="box">
                                            <p>Buy now</p>
                                            <span><a href="buy/{{$items->id_products}}"> <i class="fas fa-shopping-bag"></i> </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row mt-5">
        </div>
        </div>
    </section>

@endsection