@extends('admin.layouts.master_layout')

@section('title', 'Thông tin tài khoản')

@section('content_title', 'Thông Tin Tài Khoản')

@section('content')
<div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Bài Đăng</a></li>
          <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          {{-- Phần bài viết của user --}}
          @include('admin.pages.user_profile_post')

          {{-- Phần cài đặt profile --}}
          @include('admin.pages.user_profile_setting')
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<script>
  
  /* Begin: Hàm ajax cập nhật thông tin người dùng ở phần admin */
  function update_data()
  {
    document.getElementById('loading').style.display = "block";
    
    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });

      $.ajax({
      type: "POST",
      cache: false,
      url: "{{url('/admin/profile/update')}}",
      data: new FormData(document.getElementById('update_user')),
      contentType: false,
      processData: false,
      dataType: "text",
      success: function(data){
        window.location.href = data;
      },
      error: function(error){
          console.log(error);
      }
    });
  }
  /* End: Hàm ajax cập nhật thông tin người dùng ở phần admin */
  
  </script>
@endsection