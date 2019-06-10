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
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Contenting</title>
  <link rel="stylesheet" href="{{asset('libs/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('libs/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('libs/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('libs/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="{{asset('libs/js/jquery.js')}}"></script>
  <script src="{{asset('libs/js/jquery.validate.js')}}"></script>
  <script src="{{asset('libs/js/bootstrap.min.js')}}"></script>
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
          <span class="hidden-xs">{{Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="{{route('userprofile.index')}}" class="btn btn-default btn-flat" style="width:100%;">Profile</a>
            </div>
            <div class="pull-right">
                <a style="width:100%;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
    <img src="{{asset('img/logo.png')}}" alt="contenting Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Contenting</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image user-image">
          <p style="font-size:20px;" class="auth-user">{{substr(Auth::user()->name,0,1)}}</p>
        </div>
        <div class="info">
          <a href="#" class="d-block" style="margin-top:8px;">{{Auth::user()->name}}</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @can('superadmin', Auth::user())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <p>
                Users
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/admin/users/')}}" class="nav-link">
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <p>
                Role
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/admin/role/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
              <a href="{{url('/admin/role/create')}}" class="nav-link">
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
          @endcan
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
                <a href="{{url('/admin/domains/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/domains/create')}}" class="nav-link">
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
          @can('superadmin', Auth::user())
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Accounting
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/accounting/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/accounting/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('accounting', Auth::user())
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Accounting
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/accounting/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('/admin/accounting/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @yield('content-header')
    </div>
    <div class="content">
      @yield('content')
    </div>
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
      @yield('modal')
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="https://contenting.no">contenting.no</a>.</strong> All rights reserved.
  </footer>
</div>
@yield('datatable-script')
<!-- REQUIRED SCRIPTS -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('libs/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('libs/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('libs/js/costum.js')}}"></script>
<script type="text/javascript">
  var backgroundColor = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
  var textColor = '#ffffff';
  $('.user-image').css("background-color",backgroundColor);
  if(backgroundColor == textColor){
    backgroundColor = generateRandomColor();
    $('.user-image').css('background-color',backgroundColor);
  }
  $('.user-image').css('background-color',backgroundColor);
  function generateRandomColor(){
    var textColor = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
    return textColor;
  }
  $('[data-toggle="tooltip"]').tooltip();
</script>
</body>
</html>
