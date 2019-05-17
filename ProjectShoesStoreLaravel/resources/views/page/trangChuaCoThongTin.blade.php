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
        <section class="register" style="padding-top: 7em; input[type='text']{height: 55px !important}">
            <div class="register-full">
                <div class="register-left">
                    <div class="register-in">
                        <img src="{{ asset('styleInformation/images/giay-cao-got-depqua7.jpg') }}" style="height: 100%">
                    </div>
                </div>
                <div class="register-right">
                    <div class="register-in">
                        <h2 style="color:red">YOUR NEED ADD INFORMATION</h2>
                        <h3 style="margin-left: 90px;"><a href="trangThongTin">&rarr; Continue </a></h2>
                    </div>
                    <div class="clear"> </div>
                </div>
            <div class="clear"> </div>
            </div>
        </section>
@endsection