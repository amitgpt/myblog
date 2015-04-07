<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a class="logo" href="/admin/dashboard">
        <img alt="" src="/assets/admin/images/logo.png">
    </a>
    <!--div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div-->
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!--li>
            <input type="text" placeholder=" Search" class="form-control search">
        </li-->
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/assets/images/avatar1_small.jpg" alt="">
                <span class="username">{{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <!--li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li-->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
