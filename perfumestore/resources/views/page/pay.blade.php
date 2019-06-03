@extends('master.main')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @foreach ($buy as $item)
                    <div class="row model-detail d-mf-flex align-items-center">
                        <div class="col-md-6 ftco-animate">
                            <div class="carousel-model owl-carousel">
                                <div class="items">
                                    <img src="{{ asset('images') }}/{{$item->image}}" class="img-fluid"
                                        alt="Colorlib Template">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6 order-first ftco-animate">
                            <form action="/htdocphp/perfumestore/public/pay" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div style="display: none">
                                    <input name="id" value="{{$item->id_products}}">
                                    <input name="name" value="{{$item->name}}">
                                    <input name="price" value="{{$item->price}}">
                                    <input name="name" value="{{$item->Name}}">
                                </div>
                                <h3 class="mb-4">{{$item->name}}</h3>
                                <p><span>Name</span>&nbsp;:&nbsp;&nbsp; <span>{{$item->name}}</span></p>
                                <p><span>Carrier</span>&nbsp;:&nbsp;&nbsp; <span>{{$item->Name}}</span></p>
                                <p><span>Price</span>&nbsp;:&nbsp;&nbsp; <span>{{$item->price}}.000 VND</span></p>
                                <p><span>Quantity</span>&nbsp;&nbsp;&nbsp; <span><input type="number" name="quantity" min="1" max="5"></span></p>
                                <div class="form-group">
                                    <input type="submit" value="PAY" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection