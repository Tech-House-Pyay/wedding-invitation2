<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SmartAdmin - Responsive admin template..</title>
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/jasmine.css')}}" rel="stylesheet">
    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/bootstrap-validator/bootstrapValidator.min.css')}}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/jquery-steps.min.css')}}" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('admin/plugins/pace/pace.min.js')}}"></script>
</head>
<body>
<div id="container" class="effect mainnav-full">
    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">
            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <i class="fa fa-cube brand-icon"></i>
                    <div class="brand-title">
                        <span class="brand-text">SmartAdmin</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->
            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">
                    <!--Messages Dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="fa fa-envelope fa-lg"></i>
                            <span class="badge badge-header badge-warning">9</span>
                        </a>
                        <!--Message dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md with-arrow">
                            <div class="pad-all bord-btm">
                                <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">

                                                <div class="media-left">
                                                    <img src="{{asset('admin/img/av2.png')}}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Andy sent you a message</div>
                                                    <small class="text-muted">15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{asset('admin/img/av4.png')}}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Lucy sent you a message</div>
                                                    <small class="text-muted">30 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{asset('admin/img/av3.png')}}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">40 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{asset('admin/img/av6.png')}}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Donna sent you a message</div>
                                                    <small class="text-muted">5 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{asset('admin/img/av4.png')}}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Lucy sent you a message</div>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{asset('admin/img/av3.png')}}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End message dropdown-->
                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">5</span> </a>
                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md with-arrow">
                            <div class="pad-all bord-btm">
                                <div class="h4 text-muted text-thin mar-no"> Notification </div>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-primary"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New comments waiting approval</div>
                                                    <small class="text-muted">15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-danger"> <i class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">HDD is full</div>
                                                    <small class="text-muted">50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Write a news article</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="label label-danger pull-right">New</span>
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-purple"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Comment Sorting</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-success"> <i class="fa fa-user fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New User Registered</div>
                                                    <small class="text-muted">4 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->
                </ul>
                <ul class="nav navbar-top-links pull-right">
                    <!--Profile toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="hidden-xs" id="toggleFullscreen">
                        <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Profile toogle button-->
                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                            <span class="pull-right"> <img class="img-circle img-user media-object" src="{{asset('admin/img/av1.png')}}" alt="Profile Picture"> </span>
                            <div class="username hidden-xs">John Doe</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right with-arrow">
                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="#"> <i class="fa fa-user fa-fw"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">  <i class="fa fa-envelope fa-fw"></i> Messages </a>
                                </li>
                                <li>
                                    <a href="#">  <i class="fa fa-gear fa-fw"></i> Settings </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->
                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->
            <nav class="navbar navbar-default megamenu">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end navbar-header -->
                <div id="defaultmenu" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Home <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.html">Dashboard V1 </a></li>
                                <li><a href="dashboard-v2.html">Dashboard V2 </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Ui Elements <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="ui-animation.html"> CSS3 Animation </a></li>
                                <li><a href="ui-panel.html">Panel </a></li>
                                <li><a href="ui-xeditable.html"> X-Editable </a></li>
                                <li><a href="ui-button.html">Buttons </a></li>
                                <li><a href="ui-fontawesome.html"> FontAwesome </a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-components.html"> Components </a></li>
                                <li><a href="ui-timeline.html">Timeline </a></li>
                                <li><a href="ui-nested-lists.html"> Nested Lists </a></li>
                                <li><a href="ui-grids.html"> Grids</a></li>
                                <li><a href="ui-tab.html"> Tab </a></li>
                                <li><a href="ui-accordions.html">Accordions </a></li>
                                <li><a href="ui-dragdrop.html"> Draggable Panel</a></li>
                                <li><a href="ui-typography.html"> Typography </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="pages-faq.html"> FAQ </a></li>
                                <li><a href="pages-gallery.html"> Gallery </a></li>
                                <li><a href="pages-directory.html"> User Directory </a></li>
                                <li><a href="pages-profile.html"> User Profile</a></li>
                                <li><a href="pages-invoice.html"> Invoice </a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html"> Register </a></li>
                                <li><a href="pages-password-reminder.html"> Password Reminder </a></li>
                                <li><a href="pages-lock-screen.html"> Lock Screen </a></li>
                                <li><a href="pages-404.html"> 404 Error </a></li>
                                <li><a href="pages-500.html"> 505 Error </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Tables <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="table-static.html"> Static Table </a></li>
                                <li><a href="table-datatable.html"> Data table </a></li>
                                <li><a href="table-footable.html"> Foo Table </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Forms <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="forms-layout.html"> Form Layout </a></li>
                                <li><a href="forms-switchery.html"> Form Switchery </a></li>
                                <li><a href="forms-components.html"> Form Components </a></li>
                                <li><a href="forms-validation.html"> Form Validation </a></li>
                                <li><a href="forms-wizard.html"> Form Wizard </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Charts <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="charts-flot.html"> Flot Chart </a></li>
                                <li><a href="charts-morris.html"> Morris Chart </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li>
                            <a href="calendar.html"> Calendar </a>
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li>
                            <a href="ui-widgets.html"> Widgets </a>
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Mail <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="mail-inbox.html"> Inbox </a></li>
                                <li><a href="mail-compose.html"> Compose Mail </a></li>
                                <li><a href="mail-mailview.html"> View Mail </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Maps <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="maps-gmap.html"> Google Map </a></li>
                                <li><a href="maps-vectormap.html"> Vector Map </a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                        <!-- standard drop down -->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Menu Levels <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Second Level</a></li>
                                <li><a href="#">Second Level</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Second Level</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">Third Level</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Fourth Level</a></li>
                                                <li><a href="#">Fourth Level</a></li>
                                            </ul>
                                        </li>
                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Third Level</a></li>
                                        <li><a href="#">Third level</a></li>
                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <li><a href="#">Creattica</a></li>
                            </ul>
                            <!-- end dropdown-menu -->
                        </li>
                        <!-- end standard drop down -->
                    </ul>
                    <!-- end nav navbar-nav -->
                </div>
                <!-- end #navbar-collapse-1 -->
            </nav>
            <!-- end navbar navbar-default megamenu -->
        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <div id="profilebody">
                <div class="pad-all animated fadeInDown">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Users</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Inbox</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">FAQ</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Settings</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Calender</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Pictures</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Form wizard with Validation </h3>
                            </div>
                            <div class="panel-body">
                                <!-- START Form Wizard -->
                                <form class="form-horizontal form-bordered" action="#" id="wizard-validate">
                                    <!-- Wizard Container 1 -->
                                    <div class="wizard-title"> Bride & Groom information</div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Wedding Date: </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="wdate" type="date" placeholder="Type your wedding date" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Bride's Name: </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="bname" type="text" placeholder="Type bride's name" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Groom's Name </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="gname" type="text" placeholder="Type groom's name" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> About  : </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="bgabout" row="8" col="10" placeholder="Type your detail"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Bride's Image : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="bimage" type="file" id="bimage" data-parsley-minlength="6" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Groom's Image : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="gimage" type="file" id="gimage" data-parsley-minlength="6" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Bride's Biography : </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="bBio" placeholder="Type Bride's biography" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Groom's Biography : </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="gBio" placeholder="Type Groom's biography" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Wizard Container 1 -->

                                    <!-- Wizard Container 2 -->
                                    <div class="wizard-title"> Love Story </div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <h4 class="text-primary"> <i class="fa fa-user"></i> Love Story </h4>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Your first meet image: <span class="text-danger">*</span> </label>
                                            <div class="col-md-6">
                                                    <input type="file" name="mimage"  class="form-control" data-parsley-group="information" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Your first meet date: <span class="text-danger">*</span> </label>
                                                <div class="col-md-6">
                                                    <input type="date" name="mdate" class="form-control" data-parsley-group="information" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label col-sm-2">Your first meet short story:</label>
                                                <div class="col-md-6">
                                                    <textarea name="meetText" class="form-control"  ></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Your first trip image:</label>
                                                <div class="col-md-6">
                                                    <input type="file" name="timage" class="form-control" data-parsley-group="information" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Your first trip date: <span class="text-danger">*</span> </label>
                                                <div class="col-md-6">
                                                    <input type="date" name="tdate" class="form-control" data-parsley-group="information" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Your first trip short story:</label>
                                                <div class="col-md-6">
                                                    <textarea name="tripText" class="form-control" ></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Your engaged image:</label>
                                                <div class="col-md-6">
                                                    <input type="file" name="engimage" class="form-control" data-parsley-group="information" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Your engaged date: <span class="text-danger">*</span> </label>
                                                <div class="col-md-6">
                                                    <input type="date" name="engdate" class="form-control" data-parsley-group="information" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Your engaged short story:</label>
                                                <div class="col-md-6">
                                                    <textarea name="engtripText" class="form-control"  ></textarea>
                                                </div>
                                        </div>
                                    </div>
                                    <!--/ Wizard Container 2 -->
                                    <!-- Wizard Container 3 -->
                                    <div class="wizard-title">Family Detail</div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h4 class="text-primary"> <i class="fa fa-book"></i>Family Detail</h4>
                                            </div>
                                        </div>
{{--                                        bride family start--}}
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label"> Bride Father's Image</label>
                                                <div class="col-md-6">
                                                    <input type="file" name="bfimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Bride Father's Detail:</label>
                                                <div class="col-md-6">
                                                    <textarea name="bfText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Bride Mother's Image </label>
                                                <div class="col-md-6">
                                                    <input type="file" name="bmimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Bride Mother's Detail:</label>
                                                <div class="col-md-6">
                                                    <textarea name="bmText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Bride Brother's Image </label>
                                                <div class="col-md-6">
                                                    <input type="file" name="bbimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Bride Brother's Detail:</label>
                                                <div class="col-md-6">
                                                    <textarea name="bbText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Bride Sister's Image </label>
                                                <div class="col-md-6">
                                                    <input type="file" name="bsimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Bride Sister's Detail:</label>
                                                <div class="col-md-6">
                                                    <textarea name="bsText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                                </div>
                                        </div>
{{--                                        Bride Family End--}}
{{--                                        Groom Family start--}}
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Father's Image</label>
                                            <div class="col-md-6">
                                                <input type="file" name="gfimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Father's Detail:</label>
                                            <div class="col-md-6">
                                                <textarea name="gfText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Mother's Image </label>
                                            <div class="col-md-6">
                                                <input type="file" name="gmimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Mother's Detail:</label>
                                            <div class="col-md-6">
                                                <textarea name="gmText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Brother's Image </label>
                                            <div class="col-md-6">
                                                <input type="file" name="gbimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Brother's Detail:</label>
                                            <div class="col-md-6">
                                                <textarea name="gbText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Sister's Image </label>
                                            <div class="col-md-6">
                                                <input type="file" name="gsimage" class="form-control" data-parsley-group="family" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Groom Sister's Detail:</label>
                                            <div class="col-md-6">
                                                <textarea name="gsText" class="form-control" data-parsley-group="family" data-parsley-required ></textarea>

                                            </div>
                                        </div>
                                    </div>

{{--                                        Groom Family End--}}

                                    <!--/ Wizard Container 3 -->

                                    <!-- Wizard Container 4 -->
                                    <div class="wizard-title">Gallery</div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Gallery </label>
                                            <div class="col-md-6">
                                                <input type="file" name="gallery[]" class="form-control" data-parsley-group="gallery" data-parsley-required  multiple />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wizard Container 4 -->
                                </form>
                                <!--/ END Form Wizard -->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </div>
    </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            <ul class="footer-list list-inline">
                <li>
                    <p class="text-sm">SEO Proggres</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                    </div>
                </li>
                <li>
                    <p class="text-sm">Online Tutorial</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                    </div>
                </li>
                <li>
                    <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                </li>
            </ul>
        </div>
        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <p class="pad-lft">&#0169; 2015 Your Company</p>
    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->
<!--jQuery [ REQUIRED ]-->
<script src="{{asset('admin/js/jquery-2.1.1.min.js')}}"></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!--Fast Click [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/fast-click/fastclick.min.js')}}"></script>
<!--Jquery Nano Scroller js [ REQUIRED ]-->
<script src="{{asset('admin/plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
<!--Metismenu js [ REQUIRED ]-->
<script src="{{asset('admin/plugins/metismenu/metismenu.min.js')}}"></script>
<!--Jasmine Admin [ RECOMMENDED ]-->
<script src="{{asset('admin/js/scripts.js')}}"></script>
<!--Switchery [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/switchery/switchery.min.js')}}"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/parsley/parsley.min.js')}}"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/jquery-steps/jquery-steps.min.js')}}"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
<!--Masked Input [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/masked-input/bootstrap-inputmask.min.js')}}"></script>
<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>
<!--Fullscreen jQuery [ OPTIONAL ]-->
<script src="{{asset('admin/plugins/screenfull/screenfull.js')}}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('admin/js/demo/index.js')}}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('admin/js/demo/wizard.js')}}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('admin/js/demo/form-wizard.js')}}"></script>

</body>
</html>
