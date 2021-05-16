<?php
  $user = Auth::user();  
?>
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('/uploads/images')}}/{{$user->avatar}}" class="elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="{{url('admin/profile')}}/{{$user->url_key}}-{{$user->uid}}" class="d-block">{{$user->fullname}}</a>
      <a href="{{url('admin/logout')}}" class="btn"><i class="fas fa-sign-out-alt">Đăng xuất</i></a>
    </div>
  </div>
