<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Band Management Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- custom css -->
    <!-- Menu CSS -->
    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
                    </a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
                <li>
                    <a class="profile-pic" href="{{route('account.show',session()->get('loggedUser')->profileimage)}}"> <img src="/uploads/{{session()->get('loggedUser')->profileimage}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"></b>  {{session()->get('loggedUser')->username}}</a>
                </li>
                <li>
                    <a href="{{route('login.destroy')}}">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <div class="navbar-default sidebar nicescroll" role="navigation">
        <div class="sidebar-nav navbar-collapse ">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                    </div>
                </li>
                <li>
                    <a href="{{route('admin.index')}}" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('admin.showuser')}}" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i>User</a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i>Songs</a>
                </li>
                <li>
                    <a href="{{route('admin.manageuser')}}" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i>Manage User </a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i>Admin</a>
                </li>
                <li>
                    <a href="{{route('file.index')}}" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i> Upload Song</a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i>Manage Song</a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-user" style="padding-right: 10px"></i>Tickets</a>
                </li>
                <li>
                    <a href="{{route('band.lpconcert')}}" class="waves-effect"><i class="fa fa-music" style="padding-right: 10px"></i>Concerts</a>
                </li>
                <li>
                    <a href="{{route('band.index')}}" class="waves-effect"><i class="fa fa-music" style="padding-right: 10px"></i>Band</a>
                </li>

            </ul>

        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- Page Content -->
        @yield('content')
<!-- /#page-wrapper -->
    <footer class="footer text-center"> Bandmanagement System</footer>
<!-- /#wrapper -->
<!-- Menu Plugin JavaScript -->
<script src="{{asset('js/metisMenu.min.js')}}"></script>
<!--Nice scroll JavaScript -->
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>


<!-- Custom Theme JavaScript -->
<script src="{{asset('js/myadmin.js')}}"></script>
<script src="{{asset('js/dashboard1.js')}}"></script>
</body>

</html>
