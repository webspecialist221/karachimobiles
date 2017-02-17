 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Mirrored from sa.onlyphones.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jan 2017 16:33:21 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
<meta http-equiv="X-UA-Compatibile" content="IE=9; IE=8; IE=7; IE=EDGE" />


<meta name="sitecode" content="PK">
{{-- {-- <meta name="last-modified" content="2017-02-03"> --} --}}
<meta property="og:title" content="Mobile phone 
prices - Pakistan's daily updated mobile phone prices Pakistan Karachi Mobile">

<meta property="og:site_name" content="karachiMobile">
<meta property="og:type" content="website">
<meta property="og:country-name" content="PK">

@if(!empty($data->meta_keyword))
<meta property="og:image" content="{{asset($data->img)}}">
<meta name="Keywords" content="{{$data->meta_keyword}}">
<meta property="og:url" content="https://www.karachimobile.com/singles/{{$data->pid}}/{{$data->cat_id}}">
@else
<meta name="Keywords" content="Mobile Prices, Lg Mobile Prices , 
mobile phone Prices, Karachi, mobile, Karachi mobile, pakistan, mobile phone,
 Mobile Phone Pakistan, phone, nokia, samsung, sony ericsson, prices, motorola, HTC, zone,  Mobile Zone,">
 <meta property="og:url" content="https://www.karachimobile.com">  
@endif

@if(!empty($data->meta_description))
<meta name="Description" content="{{$data->meta_description}}"> 
<meta property="og:description" content="{{$data->meta_description}}">
@else
<meta name="Description" content="Mobile Prices in Pakistan 2017, Daily Updated Mobile Prices, Karachi Mobile Pakistan, 
Prices Lg mobile, Nokia Mobile Prices Pakistan, HTC Mobile Rates, 
Huawei Mobile Prices, Samsung Mobile prices, Sony Ericsson Mobile"> 
<meta property="og:description" content="Mobile Prices in Pakistan 2017, Daily Updated Mobile Prices, karachi Mobile Pakistan, Prices Lg mobile, 
Nokia Mobile Prices Pakistan HTC Mobile Rates, Huawei Mobile Prices, Samsung Mobile prices, Sony Ericsson Mobile">
@endif

<link rel="shortcut icon" href="{{asset('images/fabic-icon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/fabic-icon.png')}}" type="image/x-icon">
@if(!empty($title))
  <title>{{$title}}</title>
@else
  <title>Karachi Mobile</title>
@endif
<!-- Style Sheet For Website -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/f0f13b1696b2efc4b1da94acfbd6263c.png" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- /Style Sheet For Website -->
</head>
<body>
<div id="content_area">
@include('../front_template/header')
<!--Header Ends -->
<div class="clear"></div>
@include('../front_template/menu')
@include('../front_template/marquee')
<div id="header_menu_outer">
    <div id="header_menu">
        <div class="navbar_menu fleft">
            <a href="#" class="active">Browse by, <span class="drop">Brands</span></a>
        </div>
    </div>
    <!--/Header Menu Ends -->
</div>
<!--/Header Menu Outer End -->
<div class="clear"></div>
<div id="">
    @include('../front_template/sidebar')
    <a href="javascript:void(0);" class="slider-arrow show">Browse by Category</a>
        @yield('content')
    <div class="clear"></div>
    @include('../front_template/footer')
    {{-- <script src="{{asset('assets/js/jquery-1.3.2.js')}}"></script>     --}}
    
        
    <script src="{{asset('assets/js/jquery.tickerNews.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          var timer = !1;
        _Ticker = $("#T1").newsTicker();
        _Ticker.on("mouseenter",function(){
          var __self = this;
          timer = setTimeout(function(){
            __self.pauseTicker();
          },500);
        });
        _Ticker.on("mouseleave",function(){
          clearTimeout(timer);
          if(!timer) return !1;
          this.startTicker();
        });
      });
      </script>
    </body>
    </html>