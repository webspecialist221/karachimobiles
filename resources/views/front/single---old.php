<?php  
include 'Model/db-mysql.php';
include 'Model/Home.php';
include 'Model/single.php';



$single_info_obj = new Singale();
$single_data_info =  $single_info_obj->get_single_ad();
$product_id=$_GET['id'];

$single_products_info = $single_info_obj->get_products($product_id);

$related_cat_id = $single_products_info['cat_id'];
$related_product  = $single_info_obj->releted_product($related_cat_id,$product_id);
// $product_count= $single_info_obj->product_count();

// echo "<pre>";
//  print_r($related_product);
//  //echo $single_products_info[price]; 
// echo "</pre>";
// exit();

$categories = $single_info_obj->get_categories();

       
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="X-UA-Compatibile" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Language" content="en-us" />
<title>Apple iphone 3G 8GB Price in Pakistan</title>

<meta name="keywords" content="Apple iphone 3G 8GB price in Pakistan, Apple iphone 3G 8GB Price Pakistan, Apple iphone 3G 8GB price Pakistan,Apple iphone 3G 8GB price Pakistan, Latest price of Apple iphone 3G 8GB, comparison, toledo phone company,cell phone,wireless cell phone,wireless smart phones,business internet phones,advanced american telephones,what mobile, business phones, phones funding, phone loans, business funding, insured phones, phones on installments" />

<meta name="description" content="Apple iphone 3G 8GB price in Pakistan, Checkout updated Apple iphone phone price including specifications. Compare Apple iphone 3G 8GB price with other mobile phones" />




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








<script async src="pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8937498241606717",
    enable_page_level_ads: true
  });
</script>
<style type="text/css">
  
.related_mobiles{ 

  border-top: 1px solid #17c523;
}
</style>

</head>
<body>
<div id="content_area">


<div id="outer_header">
	<div class="outer_content">
    	<span class="left_keywords">
        	<h1>Latest Mobile Phone Prices in Pakistan</h1>
        </span>

        <div class="nav_search fleft">
   <form action="http://www.onlyphones.com/google-search-results.php" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-7919933827471130:1675026804">
    <input type="hidden" name="cof" value="FORID:10">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="text" name="q" size="70" class="text" style="border: 1px solid rgb(126, 157, 185); padding: 2px; background: url(&quot;https://www.google.com/cse/static/en/google_custom_search_watermark.gif&quot;) left center no-repeat rgb(255, 255, 255);">
    <div class="button" id="uniform-undefined" style="-moz-user-select: none;">
    <span><button type="submit" class="submit" style="opacity: 0;" name="sa" value="Search"></button></span>
    </div>
  </div>
<input name="siteurl" type="hidden" value="/C:/Users/Shah%20qurashi/Contacts/Desktop/newsu/sa.onlyphones.com/single.html"><input name="ref" type="hidden" value=""><input name="ss" type="hidden" value=""></form>



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
        	<a href="index.php"><img src="/mobile/public/assets/images/Logo.png" alt="Mobile Prices" title="Mobile Prices" /></a>
        </div>

		
      <div class="header_banner" style="border:1px solid;">
        <img src="images/ads.jpg" alt="" />
      </div>

    </div><!--Header Ends -->
    <div class="clear"></div>
		<div class="menubackground">
		<!-- <div style="float:left"><a href="index.html"><img src="images/homeicon.png" alt="Home" title="Home" /></a></div>
		<div style="float:left"><a href="Latest_Mobiles.html">Latest Mobiles</a></div>
		<div style="float:left"><a href="Most_Viewed.html">Most Viewed Mobiles</a></div>
				<div style="float:left"><a href="Page/Site-Map.html">Site Map</a></div>
				<div style="float:left"><a href="Page/About-Us.html">About Us</a></div>
				<div style="float:left"><a href="Page/Disclaimer.html">Disclaimer</a></div>
				<div style="float:left"><a href="Page/Advertise-with-us.html">Advertise with us</a></div>
		<div style="float:left"><a href="blog/index.html">Blog</a></div>
<div style="float:left"><a href="blog/forum/index.html">Forum</a></div>
		<div style="float:left"><a href="Contact_us.html">Contact Us</a></div> -->
        <div style="float:left">
            



            <ul class="topnav" id="myTopnav">

              <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">
<div class="responsive_menu_icon" ></div>
<div class="responsive_menu_icon" ></div>
<div class="responsive_menu_icon" ></div>
    </a>
  </li>
          
  <!-- <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()"><pre>☰</pre></a>
  </li> -->
  <li><a href="Latest_Mobiles.html">Latest Mobiles</a></li>
  <li><a href="Most_Viewed.html">Most Viewed Mobiles</a></li>
  <li><a href="Page/Site-Map.html">Site Map</a></li>
  <li><a href="Page/About-Us.html">About Us</a></li>
  <li><a href="Page/Disclaimer.html">Disclaimer</a></li>
  <li><a href="blog/index.html">Blog</a></li>
  <li><a href="Page/Advertise-with-us.html">Advertise with us</a></li>
  <li><a href="blog/forum/index.html">Forum</a></li>
  <li><a href="Contact_us.html">Contact Us</a></li>
  
</ul>

        </div>
			
		</div>
	<div class="menubackgroundbottom">
 <div class="menubackgroundbottom">
            <marquee scrollamount="3">
                
                <div class="container" style="height:33px;line-height: 35px;">

              <div id="amazingcarousel-container-1">
                  <div id="amazingcarousel-1" style="display: block; position: relative; width: 100%; max-width: 2800px; margin: 0px auto; direction: ltr;">
                      <div class="amazingcarousel-list-container" style="position: relative; margin: 0px auto; overflow: visible; width: 1000px;">
                          <div class="amazingcarousel-list-wrapper" style="overflow: hidden; width: 1000px;"><ul class="amazingcarousel-list" style="display: block; position: relative; list-style-type: none; list-style-image: none; background-image: none; background-color: transparent; padding: 0px; margin: 0px 0px 0px -946.343px; width: 2400px;">
                              <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px; padding-left: 15px; float: left;">
                                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
              <div class="amazingcarousel-text">

               <cite><a href="#">Iphone 5s 350$</a></cite>
              </div>
              <div style="clear:both;"></div>                    </div>
                              </li>
                              <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px; padding-left: 15px; float: left;">
                                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
              <div class="amazingcarousel-text">

               <cite><a href="#">Sumsung Note 7 500$</a></cite>
              </div>
              <div style="clear:both;"></div>                    </div>
                              </li>
                              <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px; padding-left: 15px; float: left;">
                                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
              <div class="amazingcarousel-text">

               <cite><a href="#">Xiomi mi Mix 700$</a></cite>
              </div>
              <div style="clear:both;"></div>                    </div>
              </li><li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
<div class="amazingcarousel-text">
<cite><a href="#">Iphone 5s 350$</a></cite>
</div>
<div style="clear:both;"></div>                    </div>
              </li>
              <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
<div class="amazingcarousel-text">
<cite><a href="#">Sumsung Note 7 500$</a></cite>
</div>
<div style="clear:both;"></div>                    </div>
              </li>
              <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
<div class="amazingcarousel-text">
<cite><a href="#">Xiomi mi Mix 700$</a></cite>
</div>
<div style="clear:both;"></div>                    </div>
                              </li>
                              
                          <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
              <div class="amazingcarousel-text">

               <cite><a href="#">Iphone 5s 350$</a></cite>
              </div>
              <div style="clear:both;"></div>                    </div>
                              </li><li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px; padding-left: 15px; float: left;">
                                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
              <div class="amazingcarousel-text">

               <cite><a href="#">Sumsung Note 7 500$</a></cite>
              </div>
              <div style="clear:both;"></div>                    </div>
                              </li><li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
              <div class="amazingcarousel-text">

               <cite><a href="#">Xiomi mi Mix 700$</a></cite>
              </div>
              <div style="clear:both;"></div>                    </div>
              </li><li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
<div class="amazingcarousel-text">
<cite><a href="#">Iphone 5s 350$</a></cite>
</div>
<div style="clear:both;"></div>                    </div>
              </li><li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px; float: left;">
                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
<div class="amazingcarousel-text">
<cite><a href="#">Sumsung Note 7 500$</a></cite>
</div>
<div style="clear:both;"></div>                    </div>
              </li><li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px;padding-left: 15px;float: left;">
                  <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 1px;">
<div class="amazingcarousel-text">
<cite><a href="#">Xiomi mi Mix 700$</a></cite>
</div>
<div style="clear:both;"></div>                    </div>
                              </li><div style="clear:both;"></div></ul></div>
                      </div>
                  </div>
              </div>
            </div>
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

 <?php  foreach ($categories as $category) {?>
  <?php 
  $no_of_items = $single_info_obj->get_category_products($category['id']);

  ?>
  <li><a href="searchby.php?id=<?php echo $category['id'] ?>" title="Nokia"><?php echo $category['title'] ?> </a><span>(<?php echo $no_of_items['total_no_products']?>)</span></li>
   <?php  } ?>
</ul>
    <ul class="menu_top_shadow">
    	<h1>Search By Network</h1>
    	<li><a href="searchby.php?search_val=4g">4G Mobiles</a><img src="images/new.gif" alt="New" style="position:relative; top:4px;"  /></li>
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
    <!--<ul class="menu_top_shadow">
    	<h1>Advertising</h1>
        <div style="text-align:center; width:200px; height:600px">
<a href=""Contact_us"><img src="images/banner.gif" alt="Advertise Your Shop Here" title="Advertise Your Shop Here" /></a>
</div>
    </ul>-->
  </div>
 <a href="javascript:void(0);" class="slider-arrow show">Browse by Category</a>
  <div class="main_container">
  	<div class="cell_phones">
    	<div class="breadcrumb">
        	<a href="index.html" title="Home Page">Home</a>&nbsp;<span>&raquo;</span>&nbsp;<a href="Mobiles/Apple-iphone.html" title="Apple iphone">Apple iphone</a>&nbsp;<span>&raquo;</span>&nbsp;Apple iphone 3G 8GB price in Pakistan        </div>
        <div class="clear"></div>
        <h1>Apple iphone 3G 8GB Mobile Price in Pakistan</h1>
        <div class="grid_15">
		<table width="100%" cellspacing="0" cellpadding="0">
<tbody>

	<tr>
    	<td>
        	<div class="specs_image_holder">
          <img src="http://localhost/mobile/public/assets/products/<?php echo $single_products_info[img]; ?>" style="width: 84%;">
          <?php  echo $single_products_info[name] ?>
         
                                         
                             <ul>
                                    	<li class="compare_list_li"><a href="comparisonc979.html?model1=108" title="Mobile Phone Comparison">Compare</a></li>
                                        
                                        
                                    </ul>
                                    </div>
                                    
                                    
                            </td>
        <td>
        	<div class="grid_11 nomargin_left specs_title">Like us & Win Latest Smart Phones</div>
           <div class="border_bottom"></div>
           <!--ads-->
          
            <div style="width: 336px;height: 280px;border: thin #ccc solid;">

           
             
             

              
              
              <?php echo base64_decode($single_data_info['top_ad']);?>
            </div>                                    
                <div class="clearboth"></div>
                <div class="phone_menu">
              	  <ul>
                   <li>
                    <div class="price_strong" style="background-color: #17c523;padding: 5px;color: white">Price:<?php echo $single_products_info[price]; ?></div>       
				           </li>
                  </ul>
                </div>
                                                   
        </td>
     </tr>   
         
   
</tbody>

</table>

<br />
<div>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_googleplus_hcount' displayText='Google +'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
</div>
<br />
<div class="clearboth"></div>


<!-- <div style="float:left; margin-right:5px;">
    <script data-cfasync="false" type="text/javascript" src="http://www.liveadexchanger.com/a/display.php?r=1477449"></script> 
</div> -->
<!-- <div>
  <script data-cfasync="false" type="text/javascript" src="http://www.liveadexchanger.com/a/display.php?r=1477449"></script> 
</div> -->
<div class="clear"></div>
<h1>Specification &amp; Features of Apple iphone 3G 8GB</h1> 
<table width="100%" cellspacing="0" cellpadding="0">

	<tr>
	<div class="grid_11 nomargin_left specs_title2">Whats New?</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_13 nomargin whats_new">

                            <?php echo  $single_products_info [description];?>
                            	                   </div>


<div class="header_banner_main" style="border:1px solid;float: left;width:100%;">
  <?php  echo base64_decode($single_data_info[footer_ad]) ;?>
</div>
                        </div>

    	<td>
        
        	<div class="grid_11 nomargin_left specs_title2">Body</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Dimensions</b></div>
                            <div class="grid_13 nomargin"> <?php echo  $single_products_info[dimensions_length].'&nbsp'.$single_products_info[dimensions_width].'&nbsp;'.$single_products_info[dimensions_depths]; ?></div>
                        </div>
                      	                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Weight</b></div>
                            <div class="grid_13 nomargin"> <?php echo  $single_products_info[weight]; ?></div>
                        </div>
                      	                        
                        
                                                
                                                <div class="grid_11 nomargin_left specs_title2">Display</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Color</b></div>
                            <div class="grid_13 nomargin"><?php echo  $single_products_info[color]; ?></div>
                        </div>
                      	                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Size</b></div>
                            <div class="grid_13 nomargin"><?php echo  $single_products_info[size]; ?></div>
                        </div>
                      	                                              	                        
                                                <div class="grid_11 nomargin_left specs_title2">Sound</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Ring Tones</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[ringtones]; ?></div>
                        </div>
                                                
                                                <div class="grid_11 nomargin_left specs_title2">Memory</div>
                       
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Internal</b></div>
                            <div class="grid_13 nomargin">

                            <?php echo  $single_products_info[internal_memory]; ?> </div>
                        </div>
                      	                        
                                                
                                                <div class="grid_11 nomargin_left specs_title2">Data</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Connectivity</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[connectivity]; ?></div>
                        </div>
                      	                        
                                                
                                                <div class="grid_11 nomargin_left specs_title2">Camera</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Primary</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[primary_camera]; ?>  </div>
                        </div>
                                                
                        <div class="grid_11 nomargin_left specs_title2">Features</div>
                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>OS</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[os]; ?></div>
                        </div>
                        
                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Processor</b></div>
                            <div class="grid_13 nomargin">

                            <?php 
                            echo ($single_products_info['processor'] == "") ? "N/A" : "are";
                            ?>
                              
                            </div>
                        </div>  
                      	                        
						                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Battery</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[battery]; ?></div>
                        </div>
                      	                        
                                                <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Frequency</b></div>
                            <div class="grid_13 nomargin">
                              <?php echo  $single_products_info[frequency]; ?>
                            </div>
                        </div>
                        
                                                
                                                
                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Browser</b></div>
                            <div class="grid_13 nomargin"><?php echo  $single_products_info[browser]; ?></div>
                        </div>
                        
                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Colors</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[colors]; ?></div>
                        </div>


                        
                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Entertainment</b></div>
                            <div class="grid_13 nomargin">
                              <?php echo  $single_products_info[entertainment]; ?>
                            </div>
                        </div>

                       
                        <div class="header_banner_main" style="border:1px solid;float: left;width:100%;">
   <?php  echo base64_decode($single_data_info['footer_ad']) ;?></div>

                        
                       
                        
                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Other Features</b></div>
                            <div class="grid_13 nomargin">Built-in GPS receiver, A-GPS function, Google Maps, Voice memo, Integrated handsfree</div>
                        </div>
                        
                        <div class="border_bottom">
                            <div class="grid_2 nomargin_left padding_left_6"><b>Messaging</b></div>
                            <div class="grid_13 nomargin">
                            <?php echo  $single_products_info[messaging]; ?></div>
                        </div>
                                   
                                </div>
                                <div class="space10px"></div>
                                
</div>
                            </div>
                            
        </td>
       
        
	
</table>


 
               
                                      
                    <div class="clearboth"></div>
             <div class="space10px"></div>
             
             

             
            <!-- <h1>User Comments</h1> -->
                 <div id="disqus_thread"></div>
<script>
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = 'onlyphones.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
    
             



    </div>
    </div>
	    	<div class="right_bar">


           <!-- <div style="width:100%;border:2px solid;margin-top:62px;">
               
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=250&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="150" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
           </div> -->

           <!-- <div style="width: 100%;
    height: 225px;
    border: 2px solid;
    margin-top: 20px;">
               
             google ads
           </div> -->
           
           <!--ads-->
          
             
                                                
                                                <div class="clearboth"></div>
                                                <div class="phone_menu">
                                
                                    <ul>
                                                                                
                                     <li>
                                                                      <!-- <div class="price_strong">Price: N/A</div> -->
                
                                             
                                    </li>
                                    </ul>
                                                </div>
                                                   
        

<ul class="related_mobiles">

    	<h1>Related Mobiles</h1>

      <?php foreach ($related_product as $related_mobiles) {?>
       
      
         <li>
                               
        	<div class="related_pic"><a href="single.php?id=<?php echo $related_mobiles[id] ?>" title="Apple iphone 7 256GB"><img src="/mobile/public/assets/products/<?php echo $related_mobiles[img] ?>" title="Apple iphone 7 256GB" alt="Apple iphone 7 256GB" border="0" height="100" /></a>
            	<div><a href="single.php?id=<?php echo $related_mobiles[id] ?>" title="Apple iphone 7 256GB"><?php echo $related_mobiles[name] ?></a></div>
              </div>
            <div class="clear"></div>
            <div class="mob_price2"><?php echo $related_mobiles[price]; ?></div>
        </li>
       <?php } ?>
                	
            </ul>
                     
        
    <div class="clear"></div>
        	

    
        </div>
    
    
    
       

    </div>
    
    <div class="clear"></div>

<div id="footer_outer">
                    <div class="inner_footer">
                     <br>
                        <h2 style="width:96%; text-align:center;color:#fff;height:10px;border-top:1px solid #fff;margin-top:20px; padding-top:10px;">Our Brands</h2>
                        <br>
                        <div class="our-network">
                            <ul>
                            <?php foreach ($categories as $brand) {?>
                                
                            
                                <li><a href="#" title="Mobile Prices in Afghanistan"><?php echo$brand['title'];  ?></a></li>
                                <?php } ?>
                            </ul>
                       </div>
                         

                        <div class="clear"></div>
                        <br />
                 </div>

                 <div class="our-network" style="border-top:1px solid #fff;">
                            <div style="
                            float:left;padding:15px;">
                              
                              <h2 style="color:#fff;">Social Pages</h2>

                            </div>
                            <div style="width:60%;
                               float:right;padding: 20px;
                            " class="right_socil_icon">
                            <div class="social"><img src="images/fc.png"></div>
                            <div class="social"><img src="images/g.png"></div>
                            <div class="social"><img src="images/tw.png"></div>
                            <div class="social"><img src="images/in.png"></div>
                            
                              
                            </div>
                        </div>
              </div>
                <div class="copyright_inner" style="background: #19c325;
        padding-left: 0px;">Copyright &copy; 2017 Onlyphones.com All Rights Reserved. Latest Mobile Prices | Design &amp; Developed By <a href="#" rel="nofollow" title="Seo Company USA"></a></div>

<!-- Supported JS Files For Website -->



<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>



<script type="text/javascript" src="js/jquery-1.3.2.js"></script>



<script type="text/javascript" src="js/jquery.quickflip.js" ></script>



<script type="text/javascript" src="js/functions.js"></script>



<!-- /Supported JS Files For Website -->

<script type="text/javascript">var switchTo5x = true;</script>



<script type="text/javascript" src="w.sharethis.com/button/buttons.js"></script>



<script type="text/javascript">stLight.options({publisher: "29415611-4174-46b3-b8b8-6ca3b60894ab", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<script src="ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="raw.githubusercontent.com/ascott1/bigSlide.js/master/dist/bigSlide.js"></script>

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



<script src="ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

$(document).ready(function(){

  
 

  $('ul#myTopnav li a').mouseenter(function(){

 $('ul#myTopnav li a').css("color","red");
 


  });

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
<script type="text/javascript" src="s7.addthis.com/js/300/addthis_widget.js#pubid=ra-504593a10ec91e09"></script>
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
<!-- AddThis Smart Layers END --></body>

<!-- Mirrored from sa.onlyphones.com/Features/Apple-iphone-3G-8GB.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jan 2017 17:28:00 GMT -->
</html>
