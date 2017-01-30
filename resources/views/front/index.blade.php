@extends('layouts.front')
@section('content')
{{-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> --}}
    <script src="{{asset('assets/js/functions.js')}}"></script>
    
<div class="main_area">
<div class="latest_slider">
    <h2 class="recent_mobiles">World Largest Mobile Phone Price Website</h2>
    <div id="carousel_container">
        <div id="carousel_inner">
            <ul id="carousel_ul">
                @foreach($sliders as $slider)                                        
                <li>
                    <a href="" >
                        <img src="{{asset($slider->img)}}" alt="Infinix Zero 4 Price in Pakistan" border="0" height="100">
                    </a>
                    <br>
                    <h2 class="latest_h2">{{$slider->name}}</h2>
                    <span class="latest_price">{{$slider->price}}</span>
                </li>
            @endforeach                                       
               
                                                        
            </ul>
        </div>
        <input type="hidden" id="hidden_auto_slide_seconds" value="0">
    </div>
    <!--  <span style="float:right;margin-right:50px;">
        
        <h1>Slider</h1>
    </span> -->
</div>
<div class="main_left">
    <h2>Samsung Mobile Phones
        <span style="float: right; margin-right: 15px;color:#fff;">
        <a href="{{url('',['all-products',3])}}"style="color:#fff;">View All</a>
    </h2>
    <div>
        <ul>
        @foreach($samsungs as $samsung)
            <li>
                <div class="viewed_pic">
                    <a href="{{url('',['singles',$samsung->pid,$samsung->cat_id])}}">
                    <img src="{{$samsung->img}}" border="0" height="100" />
                    </a>
                </div>
                <div class="mob_title most_title">
                    <a href="{{url('',['singles',$samsung->pid,$samsung->cat_id])}}">{{$samsung->name}}</a>
                </div>
                <div class="mob_price">Rs: {{$samsung->price}}</div>
            </li>
        @endforeach    
        </ul>
    </div>
    <div class="clear"></div>
    <h2>IPhone Mobile Phones
        <span style="float: right; margin-right: 15px;color:#fff;">
        <a href="{{url('',['all-products',2])}}" style="color:#fff;">View All</a>
        </span>
    </h2>
    <div>
        <ul>
        @foreach($iphones as $iphone)
            <li>
                <div class="viewed_pic">
                    <a href="{{url('',['singles',$iphone->pid,$iphone->cat_id])}}">
                    <img src="{{$iphone->img}}" border="0" height="100" />
                    </a>
                </div>
                <div class="mob_title most_title">
                    <a href="{{url('',['singles',$iphone->pid,$iphone->cat_id])}}">{{$iphone->name}}</a>
                </div>
                <div class="mob_price">Rs: {{$iphone->price}}</div>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="header_banner_main" style="border:thin #ccc solid;width:728px;height: 90px;">
        <img src="{{asset('assets/images/ads.jpg')}}" alt="" />
    </div>
    <div class="clear"></div>
    <h2>Nokia Mobile Phones
        <span style="float: right; margin-right: 15px;color:#fff;">
            <a href="{{url('',['all-products',1])}}" style="color:#fff;">View All</a>
        </span>    
    </h2>
    <div>
        <ul>
         @foreach($nokias as $nokia)
            <li>
                <div class="viewed_pic">
                    <a href="{{url('',['singles',$nokia->pid,$nokia->cat_id])}}">
                    <img src="{{$nokia->img}}" border="0" height="100" />
                    </a>
                </div>
                <div class="mob_title most_title">
                    <a href="{{url('',['singles',$nokia->pid,$nokia->cat_id])}}">{{$nokia->name}}</a>
                </div>
                <div class="mob_price">Rs: {{$nokia->price}}</div>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="clear"></div>
    <h2>Qmobiles Phones
        <span style="float: right; margin-right: 15px;color:#fff;">
            <a href="{{url('',['all-products',9])}}" style="color:#fff;">View All</a>
        </span>    
    </h2>
    <div>
        <ul>
         @foreach($qmobiles as $qmobile)
            <li>
                <div class="viewed_pic">
                    <a href="{{url('',['singles',$qmobile->pid,$qmobile->cat_id])}}">
                    <img src="{{$qmobile->img}}" border="0" height="100" />
                    </a>
                </div>
                <div class="mob_title most_title">
                    <a href="{{url('',['singles',$qmobile->pid,$qmobile->cat_id])}}">{{$qmobile->name}}</a>
                </div>
                <div class="mob_price">Rs: {{$qmobile->price}}</div>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="header_banner_main" style="border:thin #ccc solid;width:728px;height: 90px;">
        <img src="{{asset('assets/images/ads.jpg')}}" alt="" />
    </div>
    <div class="clear"></div>
    <h2>Htc Mobile Phones
        <span style="float: right; margin-right: 15px;color:#fff;">
            <a href="{{url('',['all-products',8])}}" style="color:#fff;">View All</a>
        </span>    
    </h2>
    <div>
        <ul>
         @foreach($htcs as $htc)
            <li>
                <div class="viewed_pic">
                    <a href="{{url('',['singles',$htc->pid,$htc->cat_id])}}">
                    <img src="{{$htc->img}}" border="0" height="100" />
                    </a>
                </div>
                <div class="mob_title most_title">
                    <a href="{{url('',['singles',$htc->pid,$htc->cat_id])}}">{{$htc->name}}</a>
                </div>
                <div class="mob_price">Rs: {{$htc->price}}</div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
</div>


@stop