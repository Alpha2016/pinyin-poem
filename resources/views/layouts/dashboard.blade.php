<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="{{ asset('assets/css/app.v2.css') }}" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/ie/html5shiv.js') }}" cache="false"></script>
    <script src="{{ asset('assets/js/ie/respond.min.js') }}" cache="false"></script>
    <script src="{{ asset('assets/js/ie/excanvas.js') }}" cache="false"></script>
    <![endif]-->
    @stack('style')
</head>
<body>
<section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
        <div class="navbar-header aside-md">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
                <i class="fa fa-bars"></i>
            </a>
            <a href="{{ url('/admin/index') }}" class="navbar-brand">
                <img src="{{ asset('assets/images/logo.png') }}" class="m-r-sm">{{ config('app.name', 'Poems') }} 管理平台
            </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                <i class="fa fa-cog"></i>
            </a>
        </div>
        <ul class="nav navbar-nav hidden-xs">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <i class="fa fa-building-o"></i>
                    <span class="font-bold">Activity</span>
                </a>
                <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                    <div class="wrapper lter m-t-n-xs">
                        <a href="#" class="thumb pull-left m-r">
                            <img src="{{ asset('assets/images/avatar.jpg') }}" class="img-circle">
                        </a>
                        <div class="clear">
                            <a href="#">
                                <span class="text-white font-bold">@Mike Mcalidek</span>
                            </a>
                            <small class="block">Art Director</small>
                        </div>
                    </div>
                    <div class="row m-l-none m-r-none m-b-n-xs text-center">
                        <div class="col-xs-4">
                            <div class="padder-v">
                                <span class="m-b-xs h4 block text-white">245</span>
                                <small class="text-muted">Followers</small>
                            </div>
                        </div>
                        <div class="col-xs-4 dk">
                            <div class="padder-v">
                                <span class="m-b-xs h4 block text-white">55</span>
                                <small class="text-muted">Likes</small>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="padder-v">
                                <span class="m-b-xs h4 block text-white">2,035</span>
                                <small class="text-muted">Photos</small>
                            </div>
                        </div>
                    </div>
                </section>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
            <li class="hidden-xs">
                <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
                </a>
                <section class="dropdown-menu aside-xl">
                    <section class="panel bg-white">
                        <header class="panel-heading b-light bg-light">
                            <strong>You have <span class="count">2</span> notifications</strong>
                        </header>
                        <div class="list-group list-group-alt animated fadeInRight">
                            <a href="#" class="media list-group-item">
                                <span class="pull-left thumb-sm">
                                    <img src="{{ asset('assets/images/avatar.jpg') }}" alt="John said" class="img-circle">
                                </span>
                                <span class="media-body block m-b-none"> Use awesome animate.css
                                    <br>
                                    <small class="text-muted">10 minutes ago</small>
                                </span>
                            </a>
                            <a href="#" class="media list-group-item">
                                <span class="media-body block m-b-none"> 1.0 initial released
                                    <br>
                                    <small class="text-muted">1 hour ago</small>
                                </span>
                            </a>
                        </div>
                        <footer class="panel-footer text-sm">
                            <a href="#" class="pull-right">
                                <i class="fa fa-cog"></i>
                            </a>
                            <a href="#notes" data-toggle="class:show animated fadeInRight">See
                                all the notifications
                            </a>
                        </footer>
                    </section>
                </section>
            </li>
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <i class="fa fa-fw fa-search"></i>
                </a>
                <section class="dropdown-menu aside-xl animated fadeInUp">
                    <section class="panel bg-white">
                        <form role="search">
                            <div class="form-group wrapper m-b-none">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-info btn-icon">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </section>
                </section>
            </li>
            <li class="dropdown">
                <a href="{{ url('/admin/index') }}" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="thumb-sm avatar pull-left">
                        <img src="{{ asset('assets/images/avatar.jpg') }}">
                    </span>
                    {{ Auth::guard('admin')->user()->realname }}
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li><a href="#">Settings</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li>
                        <a href="#">
                            <span class="badge bg-danger pull-right">3</span> Notifications
                        </a>
                    </li>
                    <li><a href="docs.html">Help</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/admin/login') }}" data-toggle="ajaxModal">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch"> <!-- .aside -->
            <aside class="bg-dark lter aside-md hidden-print" id="nav">
                <section class="vbox">
                    {{--<header class="header bg-primary lter text-center clearfix">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
                                <i class="fa fa-plus"></i>
                            </button>
                            <div class="btn-group hidden-nav-xs">
                                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Switch Project
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu text-left">
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Another Project</a></li>
                                    <li><a href="#">More Projects</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>--}}
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="{{ url('/admin/index') }}" class="active">
                                            <i class="fa fa-dashboard icon">
                                                <b class="bg-danger"></b>
                                            </i>
                                            <span>Workset</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#layout">
                                            <i class="fa fa-columns icon">
                                                <b class="bg-warning"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>诗歌</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li>
                                                <a href="#table">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                    <span>诗歌</span>
                                                </a>
                                                <ul class="nav bg">
                                                    <li>
                                                        <a href="{{ url('/admin/poems') }}">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>诗歌</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/admin/poem-types') }}">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>诗歌类型</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/admin/poem/records') }}">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>学习日志</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            {{--<li>
                                                <a href="layout-h.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>H-Layout</span>
                                                </a>
                                            </li>--}}
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#uikit">
                                            <i class="fa fa-flask icon">
                                                <b class="bg-success"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>UI kit</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li>
                                                <a href="buttons.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Buttons</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons.html">
                                                    <b class="badge bg-info pull-right">369</b>
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Icons</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="grid.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Grid</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="widgets.html">
                                                    <b class="badge pull-right">8</b>
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Widgets</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="components.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Components</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="list.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>List group</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#table">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                    <span>Table</span>
                                                </a>
                                                <ul class="nav bg">
                                                    <li>
                                                        <a href="table-static.html">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>Table static</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="table-datatable.html">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>Datatable</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="table-datagrid.html">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>Datagrid</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#form">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                    <span>Form</span>
                                                </a>
                                                <ul class="nav bg">
                                                    <li>
                                                        <a href="form-elements.html">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>Form elements</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="form-validation.html">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>Form validation</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="form-wizard.html">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>Form wizard</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="chart.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Chart</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="fullcalendar.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Fullcalendar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="portlet.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Portlet</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="timeline.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Timeline</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#pages">
                                            <i class="fa fa-file-text icon">
                                                <b class="bg-primary"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>Pages</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li>
                                                <a href="gallery.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Gallery</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="profile.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="invoice.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Invoice</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="intro.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Intro</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="master.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Master</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="gmap.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Google Map</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="signin.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Signin</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="signup.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Signup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="404.html">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>404</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="mail.html">
                                            <b class="badge bg-danger pull-right">3</b>
                                            <i class="fa fa-envelope-o icon">
                                                <b class="bg-primary dker"></b>
                                            </i>
                                            <span>Message</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notebook.html">
                                            <i class="fa fa-pencil icon">
                                                <b class="bg-info"></b>
                                            </i>
                                            <span>Notes</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>
                    <footer class="footer lt hidden-xs b-t b-dark">
                        <div id="chat" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n">
                                <section class="panel bg-white">
                                    <header class="panel-heading b-b b-light">Active chats</header>
                                    <div class="panel-body animated fadeInRight">
                                        <p class="text-sm">No active chats.</p>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-default">Start a chat</a>
                                        </p>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <div id="invite" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n">
                                <section class="panel bg-white">
                                    <header class="panel-heading b-b b-light"> John
                                        <i class="fa fa-circle text-success"></i>
                                    </header>
                                    <div class="panel-body animated fadeInRight">
                                        <p class="text-sm">No contacts in your lists.</p>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-facebook">
                                                <i class="fa fa-fw fa-facebook"></i>
                                                Invite from Facebook
                                            </a>
                                        </p>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                            <i class="fa fa-angle-left text"></i>
                            <i class="fa fa-angle-right text-active"></i>
                        </a>
                        <div class="btn-group hidden-nav-xs">
                            <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark"
                                    data-toggle="dropdown" data-target="#chat">
                                <i class="fa fa-comment-o"></i>
                            </button>
                            <button type="button" title="Contacts"
                                    class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown"
                                    data-target="#invite">
                                <i class="fa fa-facebook"></i>
                            </button>
                        </div>
                    </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                @yield('content')
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen"
                   data-target="#nav"></a>
            </section>
            <aside class="bg-light lter b-l aside-md hide" id="notes">
                <div class="wrapper">Notification</div>
            </aside>
        </section>
    </section>
</section>
<script src="{{ asset('assets/js/app.v2.js') }}"></script> <!-- Bootstrap --> <!-- App -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
@stack('script')
{{--  <script src="js/calendar/bootstrap_calendar.js" cache="false"></script>
<script src="js/calendar/demo.js" cache="false"></script> 
<script src="js/sortable/jquery.sortable.js" cache="false"></script>  --}}
</body>
</html>
