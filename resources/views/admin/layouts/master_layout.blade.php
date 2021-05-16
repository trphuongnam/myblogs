<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.elements.head')
</head>
  <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__wobble" src="{{asset('images/logos/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        {{-- Begin: Phần menu --}}
        @include('admin.layouts.elements.menu_top')
        {{-- End: Phần menu --}}

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
        <!-- Brand Logo -->
        <a href="javascript:void(0)" class="brand-link">
          <img src="{{asset('images/logos/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Nam Trần Blog</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          
          <!-- Sidebar user panel (optional) -->
          @include('admin.layouts.elements.user_panel')

          <!-- Sidebar Menu -->
          @include('admin.layouts.elements.menu_left')

          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

        {{-- Content --}}
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">@yield('content_title')</h1>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        {{-- Begin: Main content --}}
        <section class="content">
          <div class="container-fluid">
          @section('content')

          @show
          </div><!--/. container-fluid -->
        </section>
       {{-- End: Main content --}}

      </div>
        {{-- Content --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>

    {{-- Footer --}}
    @include('admin.layouts.elements.footer')

    {{-- Java script --}}
    @include('admin.layouts.elements.js')
  </body>
</html>
