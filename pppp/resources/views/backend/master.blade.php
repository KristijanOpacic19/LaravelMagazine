<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/adminstyle.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
  

  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="{{url('/admin')}}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-posts')}}"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="{{url('add-post')}}"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="{{url('viewcategory')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-pages')}}"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="{{url('add-page')}}"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Advertisements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-advs')}}"><i class="fa fa-eye"></i>All Advs</a></li>
              <li><a href="{{url('add-adv')}}"><i class="fa fa-plus-circle"></i>Add Adv</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="{{url('messages')}}">
              <i class="fa fa-envelope"></i> <span>Messages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{url('settings')}}">
              <i class="fa fa-gear"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('admin/users')}}"><i class="fa fa-eye"></i>All Users</a></li>
              <li><a href="{{url('admin/users/create')}}"><i class="fa fa-plus-circle"></i>Add Users</a></li>
              <li><a href="{{url('admin/roles')}}"><i class="fa fa-eye"></i>All Roles</a></li>
              <li><a href="{{url('admin/roles/create')}}"><i class="fa fa-plus-circle"></i>Add Roles</a></li>

            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>{{ Auth::user()->name }}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <form method="POST" action="{{ route('logout') }}">
              {{ csrf_field() }}
              <li><a href="{{url('/user/profile')}}"><i class="fa fa-edit"></i>Edit Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fa fa-power-off"></i>Log Out</a></li>
        </form>  
          </ul>
        </li>		
	</ul>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
 <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

@yield('content')

<footer>
	<div class="col-sm-6">
		All rights reserved. 
	</div>
	<div class="col-sm-6">
		<span class="pull-right">Version 2.2.3</span>
	</div>
</footer>
</body>
</html>