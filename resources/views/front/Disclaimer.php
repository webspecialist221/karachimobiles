
<?php 
include 'Model/db-mysql.php';
include 'Model/allproduct.php';
include 'Model/single.php';
include 'Model/Home.php';
//$cat_id=$_GET['id'];


// $Sumsung_all_obj= new Allproducts();
// $sumsung_view_all=$Sumsung_all_obj->Samsung_Mobile($cat_id);
$Category=new Singale();
$home_obj = new Home();
$add=new Allproducts();
$ads_right=$add->right_add();
//$ads_right=$Sumsung_all_obj->right_add();
$cat_info=$Category->get_categories();
$Que=$home_obj->brand_Q();
// echo "<pre>";
// print_r($ads_right);
// echo "</pre>";
// exit();


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from sa.onlyphones.com/latest_phones.php?page=3 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jan 2017 17:08:42 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="X-UA-Compatibile" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Language" content="en-us" />

<title>Latest Mobile Prices in Pakistan 2017 </title>

<meta name="keywords" content="Latest Mobile Prices in Pakistan , Mobile prices in Pakistan, Mobiles in Pakistan, latest phone prices in Pakistan, samsung mobiles in Pakistan, nokia mobile, htc mobiles" />

<meta name="description" content="Checkout latest mobile prices in Pakistan, Compare latest mobile phone prices in Pakistan. Nokia , Samsung, HTC, Apple Iphone, Blackberry, Sony, Sony Ericsson" />




<!-- Style Sheet For Website -->



<link href="http://www.onlyphones.com/404.php" rel="shortcut icon" />



<link href="css/style.css" rel="stylesheet" type="text/css"  />



<link rel="shortcut icon" href="images/f0f13b1696b2efc4b1da94acfbd6263c.png" />



<!-- /Style Sheet For Website -->

<script type="text/javascript">







    var _gaq = _gaq || [];



    _gaq.push(['_setAccount', 'UA-66761555-2']);



    _gaq.push(['_trackPageview']);







    (function () {



        var ga = document.createElement('script');

        ga.type = 'text/javascript';

        ga.async = true;



        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';



        var s = document.getElementsByTagName('script')[0];

        s.parentNode.insertBefore(ga, s);



    })();







</script>









</head>
<body>
 <div id="content_area">


<div id="outer_header">
	<div class="outer_content">
    	<span class="left_keywords">
        	<h1>Latest Mobile Phone Prices in Pakistan</h1>
        </span>

        <div class="nav_search fleft">
   <form action="#" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-7919933827471130:1675026804">
    <input type="hidden" name="cof" value="FORID:10">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="text" name="q" size="70" class="text" style="border: 1px solid rgb(126, 157, 185); padding: 2px; background: url(&quot;https://www.google.com/cse/static/en/google_custom_search_watermark.gif&quot;) left center no-repeat rgb(255, 255, 255);">
    <div class="button" id="uniform-undefined" style="-moz-user-select: none;">
    <span><button type="submit" class="submit" style="opacity: 0;" name="sa" value="Search"></button></span>
    </div>
  </div>
<input name="siteurl" type="hidden" value="/C:/Users/Shah%20qurashi/Contacts/Desktop/newsu/sa.onlyphones.com/company.html"><input name="ref" type="hidden" value=""><input name="ss" type="hidden" value=""></form>



<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("elements", "1", {packages: "transliteration"});</script><script src="https://www.google.com/uds/?file=elements&amp;v=1&amp;packages=transliteration" type="text/javascript"></script><link href="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.css" type="text/css" rel="stylesheet"><script src="https://www.google.com/uds/api/elements/1.0/7ded0ef8ee68924d96a6f6b19df266a8/transliteration.I.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.google.com/cse/t13n?form=cse-search-box&amp;t13n_langs=en"></script>

<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>



        </div>
    </div>
</div><!--Outer Header Ends -->
<div class="clear"></div>
    <div id="header">
    	<div class="logo">
        	<a href="index.html"><img src="images/01f2467cf4f304dbf8f92e73f5f5bcf7.png" alt="Mobile Prices" title="Mobile Prices" /></a>
        </div>

		
        <div class="header_banner" style="border:2px solid;">
            <img src="images/ads.jpg" alt="" />
        </div>

    </div><!--Header Ends -->
    <div class="clear"></div>
		<?php include 'menu.php'; ?>
	 <div class="menubackgroundbottom">
            <marquee scrollamount="3">
                    
                    
                    <?php foreach ($Que as $ticker) { ?>
                    
                    <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;padding-top:10px;padding-bottom:10px;">
                        <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
                            <div class="amazingcarousel-text">
                                <cite><a href="#"><?php echo $ticker['name'];?></a></cite>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </li>
                    <?php } ?>
                    
                    </marquee>
            </div>
    <div id="header_menu_outer">
    	<div id="header_menu">
    		<div class="navbar_menu fleft">
        	<a href="#" class="active">Browse by, <span class="drop">Brands</span></a>
            
        </div>
        
               
    	</div><!--/Header Menu Ends -->
    </div><!--/Header Menu Outer End -->
    <div class="clear"></div>   



      
     
<div class="left_area" id="left_panel">
  	<ul class="menu_top_shadow">
	<h1>Browse By Brand</h1>
        	<?php

  // echo "<pre>";
  // print_r($cat_info);
  // echo "<pre>";
  // exit();
  foreach ($cat_info as $cat_data) {?>
  <?php 
        $no_of_items = $Category->get_category_products($cat_data['id']);
            ?>
   <li><a href="searchby.php?id=<?php echo $cat_data['id'] ?>" title="Nokia"><?php echo  $cat_data['title']  ?> </a><span><?php  echo '('.$no_of_items['total_no_products'].')'?></span></li>
              <?php }?>
            	
            </ul>
    <ul class="menu_top_shadow">
                        <h1>Search By Network</h1>
                        <li><a href="searchby.php?search_val=4g">4G Mobiles</a><img src="images/new.gif" alt="New" style="position:relative; top:4px;" /></li>
                        <li><a href="searchby.php?search_val=3g">3G Mobile Prices</a></li>
                    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By Type</h1>
        <li><a href="searchby.php?search_val=wifi" title="Wifi Mobiles">Wifi Mobiles</a></li>
        <li><a href="searchby.php?search_val=camera" title="Digital Camera Cell Phones">Camera Mobiles</a></li>
        <li><a href="searchby.php?search_val=bluetooth" title="Bluetooth Mobiles">Bluetooth Mobiles</a></li>
        <li><a href="searchby.php?search_val=fm_radio" title="FM Mobiles">FM Mobiles</a></li>
        
        </ul>
    
        <ul class="menu_top_shadow">
          <h1>Search By OS</h1>
         <li><a href="searchby.php?search_val=Android" title="Android Phones">Android Phones</a></li>
        <li><a href="searchby.php?search_val=Symbian" title="Symbian Phones">Symbian Phones</a></li>
        <li><a href="searchby.php?search_val=Windows" title="Windows Phones">Windows Phones</a></li>
        <li><a href="searchby.php?search_val=Bada" title="Bada Phones">Bada Phones</a></li>
    </ul>
    
   
    <ul class="menu_top_shadow">
        <h1>Search By RAM</h1>
        <li><a href="searchby.php?search_val=256MB">256MB RAM</a></li>
        <li><a href="searchby.php?search_val=512MB">512MB RAM</a></li>
        <li><a href="searchby.php?search_val=1GB">1GB RAM</a></li>
        <li><a href="searchby.php?search_val=2GB">2GB RAM</a></li>
        <li><a href="searchby.php?search_val=3GB">3GB or Above</a></li>
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By Screen</h1>
        <li><a href="searchby.php?search_val=3.0">3.0 inch Screen</a></li>
        <li><a href="searchby.php?search_val=4.0">4.0 inch Screen</a></li>
        <li><a href="searchby.php?search_val=5.0">5.0 inch Screen</a></li>
        <li><a href="searchby.php?search_val=6.0">6.0 inch Screen</a></li>
        <li><a href="searchby.php?search_val=7.0">7.0 inch Screen</a></li>
        <li><a href="searchby.php?search_val=8.0">8.0 inch Screen</a></li>
        <!--<li><a href="search-by-screen/9_inch">9.0 inch Screen</a></li>-->
    </ul>
    
     <ul class="menu_top_shadow">
        <h1>Search By Camera</h1>
        <li><a href="searchby.php?search_val=13MP">13 MP Camera OR Above</a></li>
        <li><a href="searchby.php?search_val=8MP">8 MP Camera</a></li>
        <li><a href="searchby.php?search_val=5MP">5 MP Camera</a></li>
        <li><a href="searchby.php?search_val=3MP">3 MP Camera</a></li>
        <li><a href="searchby.php?search_val=2MP">2 MP Camera</a></li>
        <li><a href="searchby.php?search_val=1MP">1.3 MP Camera</a></li>
        <!--<li><a href="search-by-screen/9_inch">9.0 inch Screen</a></li>-->
    </ul>
    <br>
  <div 
  style="width:460px;height:40px;border:2px solid;
  float:left; background:#fff; margin-top:10px;display:none;" class="hide_sidebar" >
    

    Add here
  </div>


    
  </div>
 <a href="javascript:void(0);" class="slider-arrow show">Browse by Category</a>
  <div class="main_container">
  	<div class="cell_phones">
    	
        <div class="clear"></div>
        <h1>Disclaimer</h1>
        <div class="list_cellphone">

        <p>
          
          Disclaimer: The Contents on this website is elite assets of Karachimobile.com But mobile manufactures brands logos are the properties of their individual owner. The Mobiles price update daily basis from local Mobile phone shop and Mobile Dealer in Karachi. But these products price is not 100% accurate (Human Error possible). For 100% correct price Please contact or visit your local Mobile phone shop or Mobile Dealers. Karachimobile.com provide following Brand mobile phone price Nokia Mobile Price <?php 

      // echo "<pre>";
      // print_r($cat_info);
      // echo "<pre>";
      // exit();
          foreach($cat_info as $links){?> 



 <a style="padding:10px;" href="searchby.php?id=<?php echo $links['id'] ?>" title="<?php echo  $links['title']  ?> "><?php echo  $links['title']  ?> </a>

           
   <?php }?>   	
        </div>
        <div align="center" class="pagination">

    </div>

    </div>
<div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
    	<div style="border:1px solid #ccc;height:600px;width:160px;">
         <script src=""><?php echo $ads_right['right_top_ad']; ?></script> 
        </div>
        <br />
        <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
            <img src="images/ads2.jpg" alt="" />
        </div>
        <br />
        <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
            <img src="images/ads2.jpg" alt="" />
        </div> 


       
    </div>	
     <div 
  style="width:460px;height:40px;border:2px solid;
  float:right; background:#fff;" class="hide_sidebar" >
    
    Google here
  </div>
    </div>


    
    <div class="clear"></div>

<div id="footer_outer">
                    

                 <div class="our-network" style="border-top:1px solid #fff;">
                            <div style="
                               width: 24%;
                               /* float:right; */
                               padding: 25px;
                               padding-bottom: 51px;
                               /* border: 1px solid; */
                               text-align: center;
                               margin: auto;
                               background: black;
                            " class="right_socil_icon">
  <h2 style="
    float: left;
    color: #fff;
    margin-top: -1px;
    padding: 5px;
">social</h2>
                            <div class="social"><img src="images/fc.png"></div>
                            <div class="social"><img src="images/g.png"></div>
                            <div class="social"><img src="images/tw.png"></div>
                            <div class="social"><img src="images/in.png"></div>
                            
                              
                            </div>
                        </div>
              </div>
              <div class="copyright_inner" style="background: #19c325;
        padding-left: 0px;">Copyright &copy; 2017 Onlyphones.com All Rights Reserved. Latest Mobile Prices  | Design &amp; Developed By <a href="#" rel="nofollow" title="Seo Company USA"></a>

        <a href="#" rel="nofollow" title="Seo Company USA">home</a>
        <a href="#" rel="nofollow" title="Seo Company USA">there</a>
        <br>
        </div>


<!-- Supported JS Files For Website -->



<script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>



<script type="text/javascript" src="js/jquery-1.3.2.js"></script>



<script type="text/javascript" src="js/jquery.quickflip.js" ></script>



<script type="text/javascript" src="js/functions.js"></script>



<!-- /Supported JS Files For Website -->

<script type="text/javascript">var switchTo5x = true;</script>



<script type="text/javascript" src="../w.sharethis.com/button/buttons.js"></script>



<script type="text/javascript">stLight.options({publisher: "29415611-4174-46b3-b8b8-6ca3b60894ab", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<script src="../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="../raw.githubusercontent.com/ascott1/bigSlide.js/master/dist/bigSlide.js"></script>

<script type="text/javascript">

    $(function () {

       if ($(window).width() < 1000) {

            $('.slider-arrow').click(function () {

                if ($(this).hasClass('show')) {

                    $(".slider-arrow, #left_panel").animate({

                        left: "+=200"

                    }, 700, function () {

                    });

                    $(this).html('Browse by Category').removeClass('show').addClass('hide');

                }

                else {

                    $(".slider-arrow, #left_panel").animate({

                        left: "-=200"

                    }, 700, function () {

                    });

                    $(this).html('Browse by Category').removeClass('hide').addClass('show');

                }

            });

        }

    });

</script>
<script type="text/javascript">
    

    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    return false;
}


</script>



<script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){


$("marquee").hover(function () { 
    this.stop();
}, function () {
    this.start();
});
  

	$('#currency').change(function () {
            var currency = $('#currency').val();
            $.ajax({
                type: "POST",
                url: "/includes/ajax.php",
                data: {currency: currency},
                success: function (data) {
                    //window.location.reload();
					window.location.href =data;
					//alert(data);
                }
            });
        });
});

</script>


<div id="adTop">
 <script data-cfasync="false" type="text/javascript" src="http://www.liveadexchanger.com/a/display.php?r=1477469"></script> 
</div>
<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-504593a10ec91e09"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent', 
    'follow' : {
      'services' : [
        {'service': 'facebook', 'id': '/onlyphonesusa'},
        {'service': 'twitter', 'id': '/highprseousa'},
        {'service': 'linkedin', 'id': '#'},
        {'service': 'google_follow', 'id': '#'}
      ]
    },  
    'whatsnext' : {},  
    'recommended' : {} 
  });
</script>
<!-- AddThis Smart Layers END --></div>
</body>

<!-- Mirrored from sa.onlyphones.com/latest_phones.php?page=3 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jan 2017 17:08:42 GMT -->
</html>
