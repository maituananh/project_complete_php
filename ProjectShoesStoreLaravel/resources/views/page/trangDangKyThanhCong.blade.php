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
    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 text-center">
                    <p class="icon-addcart"><span><i class="icon-check"></i></span></p>
                    <h2 class="mb-4">SIGN UP SUCCESS</h2>
                    <p>
                        <a href="/ProjectShoesStoreLaravel/public/trangChu"class="btn btn-primary btn-outline-primary"><i class="fas fa-home"></i>Home</a>
                        <a href="trangDangNhap"class="btn btn-primary btn-outline-primary"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection