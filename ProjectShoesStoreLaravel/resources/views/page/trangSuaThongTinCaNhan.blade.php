@extends('masterPage.cuaHangMain')

@section('link')

    <!-- Icons font CSS-->
    <meta name="keywords" content="Modern Register Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta data -->
    <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <!-- css files -->
    <link href="{{ asset('styleInformation/css/style.css') }}" type="text/css" rel="stylesheet" media="all">   
    <!-- //css files -->
@endsection

@section('content')
<!-- section -->
<section class="register" style="padding-top: 7em;">
	<div class="register-full">
		<div class="register-left">
			<div class="register-in">
				<img src="{{ asset('styleInformation/images/giay-cao-got-depqua7.jpg') }}" style="height: 100%">
			</div>
        </div>
        @foreach ($thongtin as $show)
            
        @endforeach
		<div class="register-right">
			<div class="register-in">
				<h2 style="color:#88c8bc">EDIT YOUR INFORMATION</h2>
				<div class="register-form">
					<form action="ThuHienSuaThongtin" method="post">
						{{ csrf_field() }}
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
                                <input type="text" value="{{$show->ten}}" name="name" required=""> 
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" value="{{$show->tuoi}}" name="age" required=""> 
								<label>Age</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" value="{{$show->email}}" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" value="{{$show->phone}}" name="Phone" required="">
								<label>Phone Number</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" value="{{$show->diaChi}}" name="address" required="">
								<label>Address</label>
								<span></span>
							</div>
							<div class="clear"> </div>
						</div>
						<input type="submit" value="ADD" name='submit'>
					</form>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	<div class="clear"> </div>
	</div>
</section>
@endsection