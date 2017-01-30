<div class="left_area" id="left_panel">
    <ul class="menu_top_shadow">
        <h1>Browse By Brand</h1>
       @foreach($categories as $category)
        <li><a href="{{url('',['all-products',$category->id])}}" title="Nokia">{{$category->title}}</a><span></span></li>
       @endforeach 
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By Network</h1>
        <li><a href="{{url('',['search','four_g','1'])}}">4G Mobiles</a><img src="{{asset('assets/images/new.gif')}}" alt="New" style="position:relative; top:4px;" /></li>
        <li><a href="{{url('',['search','three_g','1'])}}">3G Mobile Prices</a></li>
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By Type</h1>
        <li><a href="{{url('',['search','wifi','1'])}}" title="Wifi Mobiles">Wifi Mobiles</a></li>
        <li><a href="{{url('',['search','camera','1'])}}" title="Digital Camera Cell Phones">Camera Mobiles</a></li>
        <li><a href="{{url('',['search','bluetooth','1'])}}" title="Bluetooth Mobiles">Bluetooth Mobiles</a></li>
        <li><a href="{{url('',['search','fm_radio','1'])}}" title="FM Mobiles">FM Mobiles</a></li>
        
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By OS</h1>
        <li><a href="{{url('',['filter','os_version','Android'])}}" title="Android Phones">Android Phones</a></li>
        <li><a href="{{url('',['filter','os_version','Symbian'])}}" title="Symbian Phones">Symbian Phones</a></li>
        <li><a href="{{url('',['filter','os_version','Windows'])}}" title="Windows Phones">Windows Phones</a></li>
        <li><a href="{{url('',['filter','os_version','Bada'])}}" title=" Phones">Bada Phones</a></li>
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By RAM</h1>
        <li><a href="{{url('',['filter','ram','256'])}}">256MB RAM</a></li>
        <li><a href="{{url('',['filter','ram','512'])}}">512MB RAM</a></li>
        <li><a href="{{url('',['filter','ram','1'])}}">1GB RAM</a></li>
        <li><a href="{{url('',['filter','ram','2'])}}">2GB RAM</a></li>
        <li><a href="{{url('',['filter','ram','3'])}}">3GB or Above</a></li>
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By Screen</h1>
        <li><a href="{{url('',['filter','display_size','3'])}}">3.0 inch Screen</a></li>
        <li><a href="{{url('',['filter','display_size','4'])}}">4.0 inch Screen</a></li>
        <li><a href="{{url('',['filter','display_size','5'])}}">5.0 inch Screen</a></li>
        <li><a href="{{url('',['filter','display_size','6'])}}">6.0 inch Screen</a></li>
        <li><a href="{{url('',['filter','display_size','7'])}}">7.0 inch Screen</a></li>
        <li><a href="{{url('',['filter','display_size','8'])}}">8.0 inch Screen</a></li>
        <!--<li><a href="search-by-screen/9_inch">9.0 inch Screen</a></li>-->
    </ul>
    <ul class="menu_top_shadow">
        <h1>Search By Camera</h1>
        <li><a href="{{url('',['filter','primary_camera',13])}}">13 MP Camera OR Above</a></li>
        <li><a href="{{url('',['filter','primary_camera',8])}}">8 MP Camera</a></li>
        <li><a href="{{url('',['filter','primary_camera',5])}}">5 MP Camera</a></li>
        <li><a href="{{url('',['filter','primary_camera',3])}}">3 MP Camera</a></li>
        <li><a href="{{url('',['filter','primary_camera',2])}}">2 MP Camera</a></li>
        <li><a href="{{url('',['filter','primary_camera',1])}}">1 MP Camera</a></li>
    </ul>
    </div>