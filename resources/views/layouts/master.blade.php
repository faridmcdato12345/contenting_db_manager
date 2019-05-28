<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    {{-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul> --}}

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="dropdown user user-menu">
        <a href="#" class="nav-link" data-toggle="dropdown">
          <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{asset('img/logo.png')}}" alt="contenting Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Contenting</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p>
                Users
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/admin/users/')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
              <a href="{{url('/admin/users/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Client
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/clients/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/clients/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                CPanel
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/cpanels/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/cpanels/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Domain Registration
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/domain/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/domain/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                MailChimps
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/mailchimp/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/mailchimp/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Plugin
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/plugins/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/plugins/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Url
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/urls/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/urls/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Youtube
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/youtubes/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/youtubes/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @yield('content-header')
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="https://contenting.no">contenting.no</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
