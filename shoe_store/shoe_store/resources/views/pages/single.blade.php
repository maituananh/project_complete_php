@extends('layout.layout')
@section('content')

<div class="wrap">
    <div class="rsidebar span_1_of_left">
        <section class="sky-form">
            <h4>Styles</h4>
            <div class="row row1 scroll-pane" style="overflow: hidden; padding: 0px; width: 273px;">
                <div class="jspContainer" style="width: 273px; height: 200px;">
                    <div class="jspPane" style="padding: 20px; top: 0px; left: 0px; width: 233px;">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic
                                (20)</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sky-form">
            <h4>Brand</h4>
            <div class="row row1 scroll-pane jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 273px;">


                <div class="jspContainer" style="width: 273px; height: 200px;">
                    <div class="jspPane" style="padding: 20px; width: 226px; top: 0px;">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by
                                Stella McCartney</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio Kids</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
                        </div>
                    </div>
                    <div class="jspVerticalBar">
                        <div class="jspCap jspCapTop"></div>
                        <div class="jspTrack" style="height: 200px;">
                            <div class="jspDrag" style="height: 143px;">
                                <div class="jspDragTop"></div>
                                <div class="jspDragBottom"></div>
                            </div>
                        </div>
                        <div class="jspCap jspCapBottom"></div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="sky-form">
            <h4>Colors</h4>
            <div class="row row1 scroll-pane" style="overflow: hidden; padding: 0px; width: 273px;">
                <div class="jspContainer" style="width: 273px; height: 200px;">
                    <div class="jspPane" style="padding: 20px; top: 0px; left: 0px; width: 233px;">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i></label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div class="cont span_2_of_3">
        @foreach ($listSingle as $item)
        <div class="labout span_1_of_a1">
                <!-- start product_slider -->
                    <li class="etalage_thumb thumb_3 etalage_thumb_active" style="background-image: none; display: list-item; opacity: 1;">
                        <img class="etalage_source_image" src="{{URL::asset('image')}}/{{$item->image}}">
                    </li>
                <!-- end product_slider -->
            </div>
            <div class="cont1 span_2_of_a1">
                <h3 class="m_3">{{$item->name}}</h3>
    
                <div class="price_single">
                    <span class="reducedfrom">$66.00</span>
                    <span class="actual">$ {{$item->price}} .000</span>
                </div>

                @if (!Session::has("username"))
                @else  
                    <div class="btn_form">
                        <form action="buyProduct/{{$item->idProducts}}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" value="buy now" title="">
                        </form>
                    </div>
                @endif
                
                <p class="m_desc">{{$item->content_details}}</p>
                <div class="social_single">
                    <ul>
                        <li class="fb"><a href="#"><span> </span></a></li>
                        <li class="tw"><a href="#"><span> </span></a></li>
                        <li class="g_plus"><a href="#"><span> </span></a></li>
                        <li class="rss"><a href="#"><span> </span></a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div class="toogle">
                <h3 class="m_3">Product Details</h3>
                <p class="m_text">{{$item->describe}}</p>
            </div>
            <div class="toogle">
                <h3 class="m_3">Product Reviews</h3>
                <p class="m_text">{{$item->reviews}}</p>
            </div>
        @endforeach
    </div>

    <div class="clear"></div>
</div>

@endsection