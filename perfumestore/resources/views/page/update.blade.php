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

            @foreach ($update as $item)
            <div class="col-md-4 order-last contact-info ftco-animate">
                <div class="row">
                    <img style="width: 100%; height: 100%" src="{{ asset('images')}}/{{$item->image}}">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 order-first ftco-animate">
                <form action="/htdocphp/perfumestore/public/update" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input style="display: none" name="id" type="text" class="form-control"
                            value="{{$item->id_products}}">
                        <input name="name" type="text" class="form-control" value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        @foreach ($productcarrier as $items)
                        @if ($items->id_productCarrier == $item->product_carrier)
                        <span><input name="Carrier" type="radio" value="{{$items->id_productCarrier}}"
                                checked>&nbsp;{{$items->name}}</span>&nbsp;&nbsp;&nbsp;
                        @else
                        <span><input name="Carrier" type="radio"
                                value="{{$items->id_productCarrier}}">&nbsp;{{$items->name}}</span>&nbsp;&nbsp;&nbsp;
                        @endif
                        @endforeach
                    </div>
                    <div class="form-group">
                        <input name="price" type="text" class="form-control" value="{{$item->price}}.000">
                    </div>
                    <div class="form-group">
                        <input name="quantity" type="number" class="form-control" value="{{$item->quantity}}">
                    </div>
                    <div class="form-group">
                        <input name="file" type="file" class="form-control">
                        <input name='SaveImage' style="display: none" value="{{$item->image}}">
                    </div>
                    <div class="form-group">
                        <textarea name="detail" cols="30" rows="7" class="form-control">{{$item->detail}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            @endforeach

        </div>
    </div>
</section>




@endsection