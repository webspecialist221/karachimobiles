@extends('layouts.front')
@section('content')
<div class="main_container">
    <div class="cell_phones">
        
        <div class="clear"></div>
        <h1>Advertising</h1>
        <div class="list_cellphone">
            <h2>Personal Information</h2>
            <p style="line-height: 20px;font-size: 14px;">
                This Privacy Policy governs the manner in which karachimobile collects, maintains and discloses information collected from users of the www.karachimobile.com website ("website"). This privacy policy applies to the Site and all products and services offered by karachimobile.
            </p>
            <h2>Personal identification information</h2>
            <p style="line-height: 20px;font-size: 14px;">
                We may save personal credentials information from Users in a variety of ways, including, but not limited to, when Users visit our site, fill out a form, and in relationship with other tricks, services, features or capital we make available on our Site. Users may be asked for, as proper, name, email address. Users may, however, visit our Site anonymously. We will collect personal credentials information from Users only if they happily submit such information to us. Users can always refuse to supply personally credentials information, except that it may avoid them from charming in certain Site related behavior.
            </p>

            <h2>Advertising</h2>
            <p style="line-height: 20px;font-size: 14px;">
                Ads appearing on our site may be delivered to Users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile non personal credentials information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This privacy policy does not cover the use of cookies by any advertisers. For more information Please <a href="{{url('contact')}}"><b>contact us</b></a> 
            </p>

            <h2>Changes to this privacy policy</h2>
            <p style="line-height: 20px;font-size: 14px;">
                Karachimobile has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications. By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.
            </p>

            <h2>Contacting us</h2>
            <p style="line-height: 20px;font-size: 14px;">
               If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site for advertisement, please contact us at:
            </p> 
            <p style="font-size: 14px;">Karachimobile</p>
            <p style="font-size: 14px;"><b>www. Karachimobile.com</b></p>   
        </div>
            <div align="center" class="pagination">
            </div>
        </div>
        <div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
            <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
                <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
            </div>
            <br />
            <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar" id="about_ad2">
                <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
            </div>
            
        </div>
    </div>
    @stop