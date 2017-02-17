@extends('layouts.front')
@section('content')
<div class="main_container">
    <div class="cell_phones">
        <div class="breadcrumb">
            <a href="index.html" title="Home Page">Home</a>&nbsp;<span>&raquo;</span>&nbsp; Most Viewed Mobile Phones in Pakistan
            
        </div>
        <div class="clear"></div>
        <h1>Most Viewed Mobile Phones in Pakistan</h1>
        <div class="list_cellphone">
            <ul>
                @foreach($productData as $data)
                <li>
                    <p class="box-mobile">
                        <a href="{{url('',['singles',$data->pid,$data->cat_id])}}" title="HTC Desire 620">
                            <img src="{{asset($data->img)}}" title="HTC Desire 620" alt="HTC Desire 620" border="0" height="100" />
                        </a>
                    </p>
                    <p class="mob_title2">
                        <a href="{{url('',['singles',$data->pid,$data->cat_id])}}">{{$data->name}}</a>
                    </p>
                    <span class="price">{{$data->price}}</span>
                    <p class="mob_detail">
                        {{substr($data->description,0,60)}}   
                    </p>
                    <span class="view_detail">
                        <a href="{{url('',['singles',$data->pid,$data->cat_id])}}">View Detail</a>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
        <div style="border:1px solid #ccc;height:600px;width:160px;">
            <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
        </div>
        <br />
        <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar" id="about_ad2">
            <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
        </div>
        <br />
        
        
    </div>
</div>
@stop