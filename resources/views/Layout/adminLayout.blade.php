<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل اصلی @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/css/bootstrap-theme.css">
  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="/css/rtl.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/all-skins.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.css">
  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">پنل</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">۴ پیام خوانده نشده</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        علیرضا
                        <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                      </h4>
                      <p>متن پیام</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        نگین
                        <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                      </h4>
                      <p>متن پیام</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        نسترن
                        <small><i class="fa fa-clock-o"></i> امروز</small>
                      </h4>
                      <p>متن پیام</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        نگین
                        <small><i class="fa fa-clock-o"></i> دیروز</small>
                      </h4>
                      <p>متن پیام</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        نسترن
                        <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                      </h4>
                      <p>متن پیام</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">۱۰</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">۱۰ اعلان جدید</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">نمایش همه</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">۹</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">۹ کار برای انجام دارید</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        ساخت دکمه
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% تکمیل شده</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        ساخت قالب جدید
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% تکمیل شده</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        تبلیغات
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% تکمیل شده</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        ساخت صفحه فرود
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% تکمیل شده</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">نمایش همه</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">رضا</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  رضا
                  <small>مدیریت کل سایت</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">صفحه من</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">فروش</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">دوستان</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">خروج</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- right side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>رضا</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="جستجو">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">تیتر</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="http://localhost:8000/admin"><i class="fa fa-link"></i> <span>صفحه اصلی</span></a></li>
        <li><a href="{{ route('setting') }}"><i class="fa fa-link"></i> <span>تنظیمات سایت</span></a></li>
        <li class="treeview">
              <a href=""><i class="fa fa-link"></i> <span>پست ها</span>
                  <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ route('createPost') }}">افزودن پست</a></li>
                  <li><a href="{{ route('posts') }}">ویرایش پست ها</a></li>
                  <li><a href="{{ route('categories') }}">دسته بندی</a></li>
                  <li><a href="{{ route('tags') }}">تگ ها</a></li>
              </ul>
        </li>

        <li class="treeview">
          <a href=""><i class="fa fa-link"></i> <span>صفحه ها</span>
            <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pages') }}">افزودن صفحه</a></li>
            <li><a href="{{ route('createPage') }}">ویرایش صفحات</a></li>
          </ul>
        </li>

         <li class="treeview">
              <a href="{{ route('comments') }}"><i class="fa fa-link"></i> <span>دیدگاه ها</span>
                    <!-- <span class="pull-left-container">
                    <i class="fa fa-angle-right pull-left"></i>
                    </span> -->
              </a>
         </li>
          <li class="treeview">
              <a href="{{ route('upload') }}"><i class="fa fa-link"></i> <span>آپلود فایل</span>
              </a>
          </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        عنوان صفحه
        <small>@yield('pageTitle')</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
        <li class="active">صفحه</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer text-left">
    <strong>
		پسر بد
	</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">فعالیت ها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">تولد غلوم</h4>

                <p>۲۴ مرداد</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">پیشرفت کارها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                آپدیت لاراول
                <span class="pull-left-container">
                    <span class="label label-danger pull-left">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">تب وضعیت</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              گزارش کنترلر پنل
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              ثبت تمامی فعالیت های مدیران
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
<script src="/ckeditor/adapters/jquery.js"></script>
</body>
</html>
