<script src="{{ asset('js/app.js') }}" defer></script>
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="{{asset('images/admin/icon-light.svg')}}" alt="HexaBit Logo"
                        class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i
                        class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i
                    class="fa fa-arrow-left"></i></a>
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-animated scale-right">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i
                            class="icon-grid"></i></a>
                    <ul class="dropdown-menu menu-icon app_menu">
                        <li>
                            <a class="#">
                                <i class="icon-envelope"></i>
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a class="#">
                                <i class="icon-bubbles"></i>
                                <span>Chat</span>
                            </a>
                        </li>
                        <li>
                            <a class="#">
                                <i class="icon-list"></i>
                                <span>Task</span>
                            </a>
                        </li>
                        <li>
                            <a class="#">
                                <i class="icon-globe"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="app-calendar.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i
                            class="icon-calendar"></i></a></li>
                <li><a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                </li>
            </ul>
        </div>

        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>

            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-animated scale-left">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-envelope"></i>
                            <span class="notification-dot"></span>
                        </a>
                        <ul class="dropdown-menu right_chat email">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <span class="name">James Wert <small class="float-right">Just
                                                    now</small></span>
                                            <span class="message">Lorem ipsum Veniam aliquip culpa laboris
                                                minim tempor</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie <small
                                                    class="float-right">12min ago</small></span>
                                            <span class="message">There are many variations of Lorem Ipsum
                                                available, but the majority</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <span class="name">Ava Alexander <small
                                                    class="float-right">38min ago</small></span>
                                            <span class="message">Many desktop publishing packages and web page
                                                editors</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media mb-0">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <span class="name">Debra Stewart <small class="float-right">2hr
                                                    ago</small></span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum is
                                                not simply random text</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-animated scale-left">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu"
                            data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot"></span>
                        </a>
                        <ul class="dropdown-menu feeds_widget">
                            <li class="header">You have 5 new Notifications</li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left"><i class="fa fa-thumbs-o-up text-success"></i>
                                    </div>
                                    <div class="feeds-body">
                                        <h4 class="title text-success">7 New Feedback <small
                                                class="float-right text-muted">Today</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">New User <small
                                                class="float-right text-muted">10:45</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left"><i class="fa fa-question-circle text-warning"></i>
                                    </div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small
                                                class="float-right text-muted">10:50</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left"><i class="fa fa-check text-danger"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small
                                                class="float-right text-muted">11:05</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Orders <small
                                                class="float-right text-muted">11:35</small></h4>
                                        <small>You received a new oder from Tina.</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i
                                class="icon-settings"></i></a></li>
                    <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="rightbar" class="rightbar">
    <ul class="nav nav-tabs-new">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Settings</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Choose Theme</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange" class="active">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled mb-0">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Auto Updates</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Account Settings</h6>
                    <ul class="setting-list list-unstyled mb-0">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Location Permission</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane right_chat" id="chat">
            <div class="slim_scroll">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar4.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Ava Alexander <small class="float-right">Just
                                                now</small></span>
                                        <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim
                                            tempor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Debra Stewart <small class="float-right">38min
                                                ago</small></span>
                                        <span class="message">Many desktop publishing packages and web page
                                            editors</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Susie Willis <small class="float-right">2hr
                                                ago</small></span>
                                        <span class="message">Contrary to belief, Lorem Ipsum is not simply
                                            random text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar1.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie <small class="float-right">2hr
                                                ago</small></span>
                                        <span class="message">There are many of passages of available, but the
                                            majority</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Marshall Nichols <small class="float-right">1day
                                                ago</small></span>
                                        <span class="message">It is a long fact that a reader will be
                                            distracted</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="{{asset('images/admin/icon-dark.svg')}}" alt="HexaBit Logo"
                class="img-fluid logo"><span>HCM</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i
                class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{Storage::url(Auth::user()->photo)}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                    data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="icon-power"></i>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>    
                    </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a>
                </li>
                <li><a href="/admin/article"><i class="icon-book-open"></i><span>Article</span></a></li>
                <li><a href="/admin/user"><i class="icon-users"></i><span>Utilisataires</span></a></li>
                <li><a href="/admin/categorie"><i class="icon-tag"></i><span>Categories</span></a></li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>Elements</span></a>
                    <ul>
                        <li><a href="ui-card.html">Card Layout</a></li>
                        <li><a href="ui-helper-class.html">Helper Classes</a></li>
                        <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>