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
                        <img src="image/banner1.jpg" alt="" />
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
    <script>
        $('.example1').wmuSlider();
    </script>
</div>



<div class="main">
    <div class="wrap">
        <div class="content-top">
            <div class="clear"></div>
        </div>

        <div class="content-bottom">
            <div class="box1">

                @foreach ($list as $item)

                <div class="col_1_of_3 span_1_of_3" style="margin-left:0px; margin-right:43px; height:353px;">
                <a href="http://localhost/shoe_store/public/single/{{$item->idProducts}}/{{$item->name}}/{{$item->price}}/{{$item->image}}/{{$item->category}}/{{$item->describe}}/{{$item->content_details}}/{{$item->reviews}}/{{$item->created_at}}">
                        <div class="view view-fifth">
                            <div class="top_box" style="height: auto">
                                <h3 class="m_1">
                                    {{$item->name}}
                                </h3>
                                <p class="m_2">
                                    {{$item->category }}
                                </p>
                                <div class="grid_img">
                                <div class="css3"><img src="{{URL::asset('image')}}/{{$item->image}}" alt="" /></div>
                                    <div class="mask">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                <div class="price">$
                                    {{$item->price}} .000
                                </div>
                            </div>
                        </div>
                        <span class="rating" style="width:50%; ">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                            <label for="rating-input-1-5" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                            <label for="rating-input-1-4" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                            <label for="rating-input-1-3" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                            <label for="rating-input-1-2" class="rating-star"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                            <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                            ({{$item->like}})
                        </span>
                        <ul class="list">
                            <li>
                                <img src="{{URL::asset('image/plus.png')}}" alt="" />
                                <ul class="icon1 sub-icon1 profile_img">
                                    @if(Session::get("username") != "")
                                        <a style="margin-button:1px; height: 31.5px" class="active-icon c1" href="single/buyProductnow/{{$item->idProducts}}">BUY NOW</a>
                                    @else
                                        <a style="margin-button:1px; height: 31.5px" class="active-icon c1" href="/shoe_store/public/login">NEED LOGIN</a>   
                                    @endif
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </a>
                </div>
                
                    
                @endforeach
                <div class="clear"></div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
