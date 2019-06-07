@extends('master.main')

@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">

				@foreach ($single as $item)
				<div class="row model-detail d-mf-flex align-items-center">
					<div class="col-md-5 ftco-animate" style="float: left">
						<div class="carousel-model owl-carousel">
							<div class="items">
								<img src="{{ asset('images') }}/{{$item->image}}" class="img-fluid"
									alt="Colorlib Template">
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>

					<form action="/htdocphp/perfumestore/public/addCart" method="post" style="width: auto">
						{{ csrf_field() }}
						<div style="display: none">
							<input name="id_products" type="number" value="{{$item->id_products}}">
						</div>
						<div class="col-md-12 model-info ftco-animate">
							<h3 class="mb-4">{{$item->name}}</h3>
							<p><span>Name</span> <span>{{$item->name}}</span></p>
							<p><span>Carrier</span> <span>{{$item->Name}}</span></p>
							<p><span>Price</span> <span>{{$item->price}}.000 VND</span></p>
							<p><span>Quantity in store</span> <span>{{$item->quantity}}</span></p>
							<p><span>Detail</span> <span>{{$item->detail}}</span></p>
							<p><span>Quantity</span> <span><input style="width: 50px;" min="1" max="5" name="quantity"
										type="number"></span></p>
							@if (Session::has("roles") == "")
							<p class="mt-4"><a href="/htdocphp/perfumestore/public/login"
									class="btn btn-primary py-3 px-4">Need Login</a></p>
							@else
							<p class="mt-4" class="btn btn-primary py-3 px-4"><input type="submit" value="ADD CART"></p>
							@endif
						</div>
					</form>
				</div>
				@endforeach

				<div style="margin-top: 150px;">
				</div>

				<div class="row no-gutters mt-5">
					@foreach ($Listsingle as $items)
					<div class="col-md-6 col-lg-3 fto-animate">
						<a href="/htdocphp/perfumestore/public/single/{{$items->id_products}}"><img
								src="{{ asset('images') }}/{{$items->image}}" class="img-fluid"
								alt="Colorlib Template"></a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection