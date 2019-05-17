<!DOCTYPE HTML>
<html ng-app="my-app">

    <head>
        <title>shoe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <meta http-equiv="refresh" content="number">
        <link href="{{URL::asset('css/boostrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('css/footer.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('css/form.css')}}" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".dropdown img.flag").addClass("flagvisibility");

                $(".dropdown dt a").click(function () {
                    $(".dropdown dd ul").toggle();
                });

                $(".dropdown dd ul li a").click(function () {
                    var text = $(this).html();
                    $(".dropdown dt a span").html(text);
                    $(".dropdown dd ul").hide();
                    $("#result").html("Selected value is: " + getSelectedValue("sample"));
                });

                function getSelectedValue(id) {
                    return $("#" + id).find("dt a span.value").html();
                }

                $(document).bind('click', function (e) {
                    var $clicked = $(e.target);
                    if (!$clicked.parents().hasClass("dropdown"))
                        $(".dropdown dd ul").hide();
                });


                $("#flagSwitcher").click(function () {
                    $(".dropdown img.flag").toggleClass("flagvisibility");
                });
            });
        </script>
        <!-- start menu -->
        <link href="{{URL::asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{URL::asset('js/megamenu.js')}}"></script>
        <script>
            $(document).ready(function () {
                $(".megamenu").megamenu();
            });
        </script>
        <!-- end menu -->
        <!-- top scrolling -->
        <script type="text/javascript" src="{{URL::asset('js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/easing.js')}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1200);
                });
            });
        </script>
    </head>

    <body style="font-size:20px;" ng-controller="userController">
        
        <div class="header-top">
            {{-- header top --}}
            @include('layout.header_top')
            {{-- end header top --}}
        </div>

        <div class="header-bottom">
            <div class="wrap">
                {{-- phân quyền menu --}}
                @if(Session::get("username") == "admin")
                    @include('layout.menu_layout_admin')
                @else 
                    @include('layout.menu_layout_customer')
                @endif
            </div>
        </div>
        
        {{-- phần thân --}}
        @yield('content')

        {{-- phần footer --}}
        <div class="footer">
            {{-- footer top --}}
            @include('layout.footer_top')
            {{-- end footer top --}}
            
            {{-- footer middel --}}
            @include('layout.footer_middle')
            {{-- end footer middel --}}


            {{-- footer button --}}
            @include('layout.footer_button')
            {{-- end footer button --}}
            
            <div class="copy">
                <div class="wrap">
                    <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };


                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <a href="#" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 1;"></span>
        </a>

        <script type="text/javascript" src="{{URL::asset('app/lib/angular.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('app/app.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('app/productsController/productsController.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('app/userController/userController.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('app/buyProducts/buyProducts.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('app/slides/slides.js')}}"></script>
    </body>

</html>
