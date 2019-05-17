@extends('layout.layout')
@section('content')


<div class="index-banner">
    <div class="wmuSlider example1" style="height: 560px;">
        <div class="wmuSliderWrapper">
            <article style="position: relative; width: 100%; opacity: 1;">
                <div class="banner-wrap">
                    <div class="slider-left">
                        <img src="{{URL::asset('image/banner1.jpg')}}" alt="" />
                    </div>
                    <div class="slider-right">
                        <h1>Classic</h1>
                        <h2>White</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="btn"><a href="shop.html">Shop Now</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            <article style="position: absolute; width: 100%; opacity: 0;">
                <div class="banner-wrap">
                    <div class="slider-left">
                        <img src="{{URL::asset('image/banner2.jpg')}}" alt="" />
                    </div>
                    <div class="slider-right">
                        <h1>Classic</h1>
                        <h2>White</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="btn"><a href="shop.html">Shop Now</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            <article style="position: absolute; width: 100%; opacity: 0;">
                <div class="banner-wrap">
                    <div class="slider-left">
                        <img src="{{URL::asset('image/banner1.jpg')}}" alt="" />
                    </div>
                    <div class="slider-right">
                        <h1>Classic</h1>
                        <h2>White</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="btn"><a href="shop.html">Shop Now</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            <article style="position: absolute; width: 100%; opacity: 0;">
                <div class="banner-wrap">
                    <div class="slider-left">
                        <img src="{{URL::asset('image/banner2.jpg')}}" alt="" />
                    </div>
                    <div class="slider-right">
                        <h1>Classic</h1>
                        <h2>White</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="btn"><a href="shop.html">Shop Now</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            <article style="position: absolute; width: 100%; opacity: 0;">
                <div class="banner-wrap">
                    <div class="slider-left">
                        <img src="{{URL::asset('image/banner1.jpg')}}" alt="" />
                    </div>
                    <div class="slider-right">
                        <h1>Classic</h1>
                        <h2>White</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="btn"><a href="shop.html">Shop Now</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
        </div>
        <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
        <ul class="wmuSliderPagination">
            <li><a href="#" class="">0</a></li>
            <li><a href="#" class="">1</a></li>
            <li><a href="#" class="wmuActive">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
        <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
        <ul class="wmuSliderPagination">
            <li><a href="#" class="wmuActive">0</a></li>
            <li><a href="#" class="">1</a></li>
            <li><a href="#" class="">2</a></li>
            <li><a href="#" class="">3</a></li>
            <li><a href="#" class="">4</a></li>
        </ul>
    </div>
    <script src="{{URL::asset('js/jquery.wmuSlider.js')}}"></script>
    {{-- <script type="text/javascript" src="{{URL::asset('js/modernizr.custom.min.js')}}"></script> --}}
    <script>
        $('.example1').wmuSlider();

    </script>
</div>


<div class="main" ng-controller="productsController">
    <div class="wrap">
        <div class="content-top">
            <div class="lsidebar span_1_of_c1">

            </div>
            <div class="cont span_2_of_c1">
                <div class="social">
                    <ul>
                        <li class="facebook"><a href="#"><span> </span></a>
                            <div class="radius"> <img src="{{URL::asset('image/radius.png')}}"><a href="#"> </a></div>
                            <div class="border hide">
                                <p class="num">1.51K</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li class="twitter"><a href="#"><span> </span></a>
                            <div class="radius"> <img src="{{URL::asset('image/radius.png')}}"></div>
                            <div class="border hide">
                                <p class="num">1.51K</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li class="google"><a href="#"><span> </span></a>
                            <div class="radius"> <img src="{{URL::asset('image/radius.png')}}"></div>
                            <div class="border hide">
                                <p class="num">1.51K</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li class="dot"><a href="#"><span> </span></a>
                            <div class="radius"> <img src="{{URL::asset('image/radius.png')}}"></div>
                            <div class="border hide">
                                <p class="num">1.51K</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="clear"></div>
        </div>


        <div class="content-bottom">
            <div class="box1">


                <div class="col_1_of_3 span_1_of_3" ng-repeat="pro in Products" style="margin-left:0px; margin-right:43px">
                    <a href="single.html">
                        <div class="view view-fifth">
                            <div class="top_box">
                                <h3 class="m_1">
                                    <% pro.name %>
                                </h3>
                                <p class="m_2">
                                    <% pro.category %>
                                </p>
                                <div class="grid_img">
                                    <div class="css3"><img src="{{URL::asset('image')}}/<% pro.image %>" alt="" /></div>
                                    <div class="mask">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                <div class="price">$
                                    <% pro.price %>
                                </div>
                            </div>
                        </div>
                        <ul class="list" style="background: red; height:40px">
                            <li>

                                <ul class="icon1 sub-icon1">
                                    <li>
                                        <a id="delete" href="deleteProducts/<% pro.idProducts %>" style="margin-left: 57px;">DELETE</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </a></div>
                <div class="clear"></div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
