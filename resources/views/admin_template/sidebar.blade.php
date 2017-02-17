<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><h3>Karachi Mobile</h3></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>{{Auth::user()->type}}</h3>
              <ul class="nav side-menu">
                <li><a href="admin"><i class="fa fa-home"></i> Home </a>
                </li>
                @if(Auth::user()->type == 'Admin')
                <li><a><i class="fa fa-wrench"></i> Setting <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('admin/general-setting')}}">General Setting</a>
                    </li>
                    <li><a href="{{url('admin/home-setting')}}">Home Page Setting</a>
                    </li>
                    <li><a href="{{url('admin/company-setting')}}">Company Page Setting</a>
                    </li>
                    <li><a href="{{url('admin/product-setting')}}">Product Page Setting</a>
                    </li>
                  </ul>
                </li>
                @endif
                @if(Auth::user()->type == 'Admin')
                <li><a><i class="fa fa-bars"></i> Categories <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('admin/categories/create')}}">Add Category</a>
                    </li>
                    <li><a href="{{url('admin/categories')}}">All Categories</a>
                    </li>
                  </ul>
                </li>
                @endif
                <li><a><i class="fa fa-product-hunt"></i> Products <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('admin/products/create')}}">Add Product</a>
                    </li>
                    <li><a href="{{url('admin/products')}}">All Products</a>
                    </li>
                  </ul>
                </li>
                @if(Auth::user()->type == 'Admin')
                <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('admin/users/create')}}">Add User</a>
                    </li>
                    <li><a href="{{url('admin/users')}}">All Users</a>
                    </li>
                  </ul>
                </li>
                @endif
                <li><a href="{{url('/')}}" target="_blank"><i class="fa fa-home"></i> Visit Site </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>