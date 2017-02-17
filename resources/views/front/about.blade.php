@extends('layouts.front')
@section('content')
    <div class="main_container">
    <div class="cell_phones">
        
        <div class="clear"></div>
        <h1>About Us</h1>
        <div class="list_cellphone">

        <p style="line-height: 20px;font-size: 14px;"">
        {{-- <b>Personal Information</b> --}}
             <b>Karachimobile.com</b> is best website for latest Mobile Phone Price in Pakistan. Especially in Karachi, Lahore and Faisalabad. Our Passion to provide you latest Mobile Phone Price and Specification. Our team daily update price (Human error possible). This price is not 100% correct. For 100% correct price. Please visit or contact local Mobile Shop and Mobile Phone Dealers. If you see any error in this site. Please <a href="{{url('contact')}}"><b>contact us</b></a>. And right your opinion to make this site better for you.<br>
        </p>
        </div>
        <h1>Our Team</h1>
         <ul style="margin-left: 90px;">
             <li class="abt">
                <img class="abt_img" src="{{asset('assets/images/tahir.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;width:128px;" target="_blank">
                <h3 style="text-align: center;color:green;">Muhammad Tahir
                    <br><small style="color:black;">Website Manager</small>
                </h3>
                <div style="text-align: center;">
                    <a href="https://www.facebook.com/mtahir.tahir.946" ><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>

             <li class="abt">
                <img class="abt_img" src="{{asset('assets/images/zahid.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px; width: 128px">
                <h3 style="text-align: center;color:green;">Muhammad Zahid
                    <br><small style="color:black;">SEO Expert</small>
                </h3>
                <div style="text-align: center;">
                    <a href="https://www.facebook.com/muhammadzahidgojra" target="_blank"><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>

             <li class="abt">
                <img class="abt_img" src="{{asset('assets/images/saddam.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;width:128px;height: 128px;">
                <h3 style="text-align: center;color:green;">Saddam Hussain
                    <br><small style="color:black;">Web Developer</small>
                </h3>
                <div style="text-align: center;">
                    <a href="https://www.facebook.com/terriblespeciallist/?ref=aymt_homepage_panel" target="_blank"><b style="font-size: 12px;">Facebook</b>
                    </a> | 
                    <a href="" ><b style="font-size: 12px;">Google+</b>
                    </a>
                </div>
                
             </li>

             <li class="abt">
                <img class="abt_img" src="{{asset('assets/images/sohail.jpg')}}" alt="" style="margin:10px 35px;border-radius: 100px;">
                <h3 style="text-align: center;color:green;">Muhammad Sohail Khan
                    <br><small style="color:black;">Market Expert</small>
                </h3>
                <div style="text-align: center;">
                    <a href="https://www.facebook.com/profile.php?id=100000753182739" target="_blank"><b style="font-size: 12px;">Facebook</b>
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