<div id="outer_header">
<div class="outer_content">
    <span class="left_keywords">
        <h1>World Largest Mobile Phone Price Website</h1>
    </span>
    <div class="nav_search fleft">
        <form action="{{url('',['search-by'])}}" method="post">
            {{csrf_field()}}
            <div>
                <input type="text" name="searchBy"  class="text" style="border: 1px solid rgb(126, 157, 185); padding: 2px;" placeholder="Search By Mobile Name">
                <div class="button" id="uniform-undefined" style="-moz-user-select: none;">
                    <span>
                        <button type="submit" class="submit" value="Search"></button>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="clear"></div>
<div id="header">
    <div class="logo">
        <a href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt="Mobile Prices" title="Mobile Prices" /></a>
    </div>
    <div class="header_banner" style="border:1px solid;background:#fff">
        <img src="{{asset('assets/images/ads.jpg')}}" alt="" />
    </div>
</div>