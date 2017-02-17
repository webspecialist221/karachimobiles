@extends('layouts.front')
@section('content')
<style>
    @media only screen and (max-width: 500px) {
    .margin {
        margin-right: 20px;
    }
}

.margin{
    float: right;
}
</style>
<div class="main_container" style="margin-bottom: 60px;">
    <div class="cell_phones">
        <div class="breadcrumb">
            <a href="{{url('/')}}" title="Home Page">Home</a>&nbsp;<span>&raquo;</span>&nbsp;
            <a  title="Apple iphone">{{$data->title}} </a>&nbsp;<span>&raquo;</span>&nbsp;
                {{$data->name}} </div>
            <div class="clear"></div>
            <h1>{{$data->name}} Mobile Price in Pakistan</h1>
            <div class="grid_15">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td>
                                <div class="specs_image_holder">
                                    <img src="{{asset($data->img)}}" style="width:80%;">
                                </div>
                                
                                
                            </td>
                            <td>
                                <div class="grid_11 nomargin_left specs_title" style="text-align: center;">
                                    Like us & Win Latest Smart Phones</div>
                                <div class="border_bottom"></div>
                                <!--ads-->
                                
                                <div class="margin" >
                                   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKarachiMobile-1195954990524513%2F&tabs&width=340&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                    {{-- <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fonlyphonesusa&amp;width=340px&amp;height=280&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=299335346889541" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:340px; height:280px;" allowtransparency="true"></iframe> --}}
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="clearboth"></div>
                                <div class="phone_menu">
                                    <ul>
                                        <li>
                                            <span style="float: left;font-size: 18px;margin-right: -10px;color: black;margin-top: 7px;">Price:</span><div class="price_strong" style="border-radius: 10px;">Rs: {{$data->price}}
                                            </div>
                                            
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
                <h1>Specification &amp; Features of {{$data->name}}</h1>
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                        <div class="grid_11 nomargin_left specs_title2">Whats New?</div>
                        
                        <div class="border_bottom">
                            <div class="grid_13 nomargin whats_new">
                                {{$data->description}}
                            </div>
                            {{-- <div class="header_banner_main" style="border:1px solid;float: left;width:100%;">
                                
                            </div> --}}
                        </div>
                        <td>
                            
                            <div class="grid_11 nomargin_left specs_title2">Body</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6"><b>Dimensions</b></div>
                                <div class="grid_13 nomargin">
                                    {{$data->dimensions_width}} x {{$data->dimensions_length}} x {{$data->dimensions_depth}}

                                </div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6"><b>Weight</b></div>
                                <div class="grid_13 nomargin">{{$data->weight}}</div>
                            </div>
                            
                            
                            
                            <div class="grid_11 nomargin_left specs_title2">Display</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Color</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->color}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Size</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->display_size}}</div>
                            </div>
                            
                            <div class="grid_11 nomargin_left specs_title2">Sound</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Ring Tones</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->ringtones}}</div>
                            </div>
                            
                            <div class="grid_11 nomargin_left specs_title2">Memory</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Internal</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->ram}}{{$data->ram_unit}}</div>
                            </div>
                            
                            
                            <div class="grid_11 nomargin_left specs_title2">Data</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Connectivity</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->connectivity}}</div>
                            </div>

                            @if($data->three_g == 1)
                                <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>3G</b>
                                </div>
                                <div class="grid_13 nomargin">Yes</div>
                            </div>
                            @endif

                            @if($data->four_g == 1)
                                <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>4G</b>
                                </div>
                                <div class="grid_13 nomargin">Yes</div>
                            </div>
                            @endif
                            
                            <div class="grid_11 nomargin_left specs_title2">Camera</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Primary</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->primary_camera}}</div>
                            </div>
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Secondary</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->secondary_camera}}</div>
                                 
                            </div>
                            
                            <div class="grid_11 nomargin_left specs_title2">Features</div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>OS</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->os_version}} {{$data->os_name}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Processor</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->processor}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Battery</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->battery}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Frequency</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->frequency}}</div>
                            </div>
                            
                            
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Browser</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->browser}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Colors</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->colors}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Entertainment</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->entertainment}}</div>
                            </div>
                            
                            
                            
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Messaging</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->messaging}}</div>
                            </div>
                            
                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Other Features</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->other_features}}</div>
                            </div>

                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Technology</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->technology}}</div>
                            </div>

                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>SIM</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->sim}}</div>
                            </div>

                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Resolution</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->resolution}}</div>
                            </div>

                            <div class="border_bottom">
                                <div class="grid_2 nomargin_left padding_left_6">
                                    <b>Status</b>
                                </div>
                                <div class="grid_13 nomargin">{{$data->status}}</div>
                            </div>
                            
                            
                        </div>
                        <div class="space10px"></div>
                        <div class="header_banner_main" style="width:100%;height: 320px;">
                            <div style="width: 50%;height: 300px;margin: 10px auto;border:thin black solid;">
                                
                            </div>
                        </div>
                    </div>
                </div>
                </td>
</table>
</tr>
</table>
<div class="clearboth"></div>
<div class="space10px"></div>
<div id="disqus_thread"></div>
</div>
</div>
<div class="right_bar" style="margin-top: 10px;">
    <div class="clearboth"></div>                                            
        <ul class="related_mobiles" style="min-height:900px;">
        <h1>Related Mobiles</h1>
        @foreach($relateds as $relate)
            <li>                   
                <div class="related_pic ">
                    <a href="{{url('',['singles',$relate->pid,$relate->cat_id])}}">
                        <img src="{{asset($relate->img)}}" border="0" height="100" />
                    </a>
                <div>
                    <a href="{{url('',['singles',$relate->pid,$relate->cat_id])}}" title="Apple iphone 7 256GB">{{$relate->name}}</a>
                </div>
                </div>
                <div class="clear"></div>
                @if($relate->price != 0)
                    <div class="mob_price2">Rs: {{$relate->price}}</div>
                @else
                    <div class="mob_price2">Comming Soon</div>
                @endif
            </li>
        @endforeach    
        </ul>
        <div class="clear"></div>
    </div>
</div>
@stop