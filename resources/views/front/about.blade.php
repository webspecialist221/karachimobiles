@extends('layouts.front')
@section('content')
    <div class="main_container">
    <div class="cell_phones">
        
        <div class="clear"></div>
        <h1>About Us</h1>
        <div class="list_cellphone">

        <p style="line-height: 20px;font-size: 14px;"">
        <b>Personal Information</b>
            This Privacy Policy governs the manner in which karachimobile collects, maintains and discloses information collected from users of the www.karachimobile.com website ("website"). This privacy policy applies to the Site and all products and services offered by karachimobile.<br>
        </p>
        </div>
        <h1>Our Team</h1>
         <ul style="margin-left: 90px;">
             <li style="width: 200px;border-radius:10px;float:left;margin:10px;border: thin solid green;height: 250px;">
                <img src="{{asset('assets/images/img.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;">
                <h3 style="text-align: center;color:green;">Muhammad Tahir
                    <br><small style="color:black;">Product Manager</small>
                </h3>
                <div style="text-align: center;">
                    <a href="" ><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>

             <li style="width: 200px;border-radius:10px;float:left;margin:10px;border: thin solid green;height: 250px;">
                <img src="{{asset('assets/images/img.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;">
                <h3 style="text-align: center;color:green;">Muhammad Zahid
                    <br><small style="color:black;">SEO Expert</small>
                </h3>
                <div style="text-align: center;">
                    <a href="" ><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>

             <li style="width: 200px;border-radius:10px;float:left;margin:10px;border: thin solid green;height: 250px;">
                <img src="{{asset('assets/images/saddam.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;width:128px;height: 128px;">
                <h3 style="text-align: center;color:green;">Saddam Hussain
                    <br><small style="color:black;">Web Developer</small>
                </h3>
                <div style="text-align: center;">
                    <a href="" ><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>

             <li style="width: 200px;border-radius:10px;float:left;margin:10px;border: thin solid green;height: 250px;">
                <img src="{{asset('assets/images/img.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;">
                <h3 style="text-align: center;color:green;">Muhammad Sohail Khan
                    <br><small style="color:black;">Market Expert</small>
                </h3>
                <div style="text-align: center;">
                    <a href="" ><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>



             

             
         </ul>
            


             
        <div align="center" class="pagination">

    </div>

    </div>
<div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
        <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar" id="about_ad1">
            <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
        </div>
        <br />
        <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar" id="about_ad2">
            <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
        </div>  


       
    </div>  
     <!-- <div 
  style="width:460px;height:40px;border:2px solid;
  float:right; background:#fff;" class="hide_sidebar" >
    
    Google here
  </div> -->
    </div>
@stop