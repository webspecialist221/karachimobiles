@extends('layouts/front')
@section('content')
<div class="main_container">
    <div class="cell_phones">
        <div class="breadcrumb">
            <a href="index.html" title="Home Page">Home</a>&nbsp;<span>&raquo;</span>&nbsp; Latest Mobile Phones in Pakistan 
        </div>
        <div class="clear"></div>
        <h1>Latest {{$cat_name}} Mobile Phone Prices & Spec</h1>
        <div class="list_cellphone">
            <ul>
            {{-- {{dd($productData)}} --}}
            @foreach($productData as $data)
                <li style="text-align: center;>
                    <p class="box-mobile">
                        <a href="{{url('',['singles',$data->id,$cat_id])}}" title="HTC Desire 620">
                            <img src="{{asset($data->img)}}" border="0" height="100" />
                        </a>
                    </p>
                    <p class="mob_title2">
                        <a href="{{url('',['singles',$data->id,$cat_id])}}" >{{$data->name}}</a>
                    </p>
                    <span class="price">Rs {{$data->price}}</span>
                    <p class="mob_detail" ">{{substr($data->description,0,100)}}</p>
                    <span class="view_detail">
                        <a href="{{url('',['singles',$data->id,$cat_id])}}">View Detail</a>
                    </span>
                </li>
            @endforeach    
            </ul>
        </div>
    </div>

    <div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
        <div style="border:1px solid #ccc;height:600px;width:160px;">
            <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />   
        </div><br/>
        <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar" id="about_ad2">
            <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
        </div>
          
    </div>
    <br/>  
</div>
@stop