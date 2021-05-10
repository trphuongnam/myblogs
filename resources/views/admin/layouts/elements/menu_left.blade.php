{{-- Begin: Thanh tìm kiếm --}}
<div class="form-inline">
  <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-sidebar">
        <i class="fas fa-search fa-fw"></i>
      </button>
    </div>
  </div>
</div>
{{-- End: Thanh tìm kiếm --}}

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
      </li>

      {{--Begin: Menu quản lý bài viết --}}
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Quản lý bài viết
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/admin/post')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách Bài Viết</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/cat')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách Chủ Đề</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/post-comment')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách Comment</p>
            </a>
          </li>
        </ul>
      </li>
        {{--End: Menu quản lý bài viết --}}
      

        {{--Begin: Menu quản lý hình ảnh & album --}}
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Album ảnh
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách Ảnh</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách Album</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách Comment</p>
            </a>
          </li>
        </ul>
      </li>
        {{--End: Menu quản lý hình ảnh & album --}}


        {{--Begin: Menu quản lý user --}}
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-user"></i>
          <p>
            Quản lý User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/admin/user')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh Sách User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/user-authorize')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Phân Quyền User</p>
            </a>
          </li>
        </ul>
      </li>
        {{--End: Menu quản lý user --}}

        <li class="nav-header">THÔNG TIN WEBSITE</li>
        {{--Begin: Menu quản lý giới thiệu --}}
        <li class="nav-item">
            <a href="{{url('/admin/about')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Giới Thiệu
              </p>
            </a>
        </li>
        {{--End: Menu quản lý giới thiệu --}}

        {{--Begin: Menu quản lý web info --}}
        <li class="nav-item">
            <a href="{{url('/admin/webinfo')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Website Info
              </p>
            </a>
        </li>
        {{--End: Menu quản lý web info --}}

    </ul>
  </nav>
