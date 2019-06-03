@extends('master.main')

@section('content')
			
    <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-5 heading-section text-center ftco-animate">
                        <span class="subheading">Edit</span>
                        <h2 class="mb-4">Products</h2>
                    </div>
                </div>
                <div class="row d-flex">

                    @foreach ($ListProducts as $item)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry bg-dark align-self-stretch">
                                <a href="/htdocphp/perfumestore/public/single/{{ $item->id_products }}" class="block-20" style="background-image: url({{ asset('images')}}/{{$item->image }});">
                                </a>
                                <div class="text p-4 d-block">
                                <h3 class="heading mt-3"><a href="#">{{ $item->name }}</a><br><a href="#">{{ $item->price }}.000 VND</a></h3>
                                <p><a href="/htdocphp/perfumestore/public/showUpdate/{{ $item->id_products }}" class="btn btn-success">Update</a>
                                    <a style="float: right" href="/htdocphp/perfumestore/public/delete/{{ $item->id_products }}" class="btn btn-danger">Delete</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
    </section>	

@endsection