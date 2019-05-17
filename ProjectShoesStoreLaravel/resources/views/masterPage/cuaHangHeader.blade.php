<!DOCTYPE HTML>
<html>
	<head>
	
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Shoes Store Mai Tuan Anh Laravel</title>
	@yield('link') 
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/shoe-icon.png') }}"/>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
	
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	
	</head>
	<body>
        <div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="/ProjectShoesStoreLaravel/public/trangChu">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="/ProjectShoesStoreLaravel/public/trangTimKiem" class="search-wrap" method="POST">
							{{ csrf_field() }}
			               <div class="form-group">
			                  <input name="timKiem" type="search" class="form-control search" placeholder="Search name product">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="/ProjectShoesStoreLaravel/public/trangChu">Home</a></li>
								<li class="has-dropdown">
									<a href="/ProjectShoesStoreLaravel/public/dangnhap/trangDangNhap">Gender</a>
									<ul class="dropdown">
										@foreach ($GTSP as $item)
											<li><a href="/ProjectShoesStoreLaravel/public/gioitinhSP/{{$item->tenTLGT}}">{{$item->tenTLGT}}</a></li>
										@endforeach
									</ul>
								</li>
								
								<li class="has-dropdown">
									<a href="#">Items</a>
									<ul class="dropdown">
										@foreach ($HANGMENU as $item)
											<li>
												<a href="/ProjectShoesStoreLaravel/public/hanghoa/timhang/{{$item->tenHang}}">{{$item->tenHang}}</a>
											</li>
										@endforeach
									</ul>
								</li>
								
								<li><a href="/ProjectShoesStoreLaravel/public/trangGioiThieu">About</a></li>
								<li><a href="/ProjectShoesStoreLaravel/public/trangLienHe">Contact</a></li>
								
								<li class="has-dropdown">
									<a href="/ProjectShoesStoreLaravel/public/dangnhap/trangDangNhap">Accout</a>
									<ul class="dropdown">
										@if(Session::has("usersName") != "")
											<li><a href="/ProjectShoesStoreLaravel/public/thongTinCaNhan/showthongtin">Information</a></li>
											<li><a href="/ProjectShoesStoreLaravel/public/hanghoa/DanhSachMuaHang">Bought</a></li>
											
											@foreach ($ThuQLCH as $item)
												@if ($item->idTLYC != "" && Session::get("role") == 2)
													<li><a href="/ProjectShoesStoreLaravel/public/hanghoa/thuYC">Letter (!)</a></li>												
												@endif
												<?php break; ?>
											@endforeach

											<li><a href="/ProjectShoesStoreLaravel/public/dangnhap/trangDangXuat">Sign Out</a></li>
										@else
											<li><a href="/ProjectShoesStoreLaravel/public/dangnhap/trangDangNhap">Sign in</a></li>
										@endif
									</ul>
								</li>
								@if(Session::get("idUsers") == 1)
									<li><a style="color: #88c8bc;" href="/ProjectShoesStoreLaravel/public/admin/trangChuAdmin">Administrator</a></li>
								@endif

								@if(Session::has("usersName") != "" && Session::get("role") != 2)
									<li class="cart"><a href="/ProjectShoesStoreLaravel/public/hanghoa/DanhSachgiohang"><i class="icon-shopping-cart"></i> Your Cart</a></li>
								@endif

								@if(Session::get("role") == 2)
									<li class="cart"><a href="/ProjectShoesStoreLaravel/public/hanghoa/trangYeuCauHang"><i class="fas fa-box"></i> Request Products</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>