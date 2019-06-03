@extends('master.main')

@section('content')

<section class="ftco-section contact-section">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5 heading-section text-center ftco-animate">
            <span class="subheading">ADD PRODUCT</span>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 order-last contact-info ftco-animate">
                <div class="row">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/ysl-tuxedo.png') }}">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 order-first ftco-animate">
                <form action="/htdocphp/perfumestore/public/add" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        @foreach ($productcarrier as $items)
                        <span><input name="Carrier" type="radio"
                                value="{{$items->id_productCarrier}}">&nbsp;{{$items->name}}</span>&nbsp;&nbsp;&nbsp;
                        @endforeach
                    </div>
                    <div class="form-group">
                        <input name="price" type="number" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input name="quantity" type="number" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <input name="file" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="detail" cols="30" rows="7" class="form-control" placeholder="Detail"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ADD" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection