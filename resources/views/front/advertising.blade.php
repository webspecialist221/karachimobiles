@extends('layouts.front')
@section('content')
<div class="main_container">
    <div class="cell_phones">
        
        <div class="clear"></div>
        <h1>Advertising</h1>
        <div class="list_cellphone">
            <p style="line-height: 20px;font-size: 14px;">
                Ads appearing on our site may be delivered to Users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile non personal credentials information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This privacy policy does not cover the use of cookies by any advertisers. For more information Please <a href="contact.php">contact us </a>
            </p>    
            </div>
            <div align="center" class="pagination">
            </div>
        </div>
        <div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
            <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
                <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
            </div>
            <br />
            <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
                <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
            </div>
            
        </div>
        <div
            style="width:460px;height:40px;border:2px solid;
            float:right; background:#fff;" class="hide_sidebar" >
            
            Google here
        </div>
    </div>
    @stop