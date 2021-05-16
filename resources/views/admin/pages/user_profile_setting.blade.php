<div class="tab-pane" id="settings">
  {{-- Begin: Form cập nhật thông tin --}}
  <form action="{{url('/admin/profile/update')}}" id="update_user" method="POST" class="form-horizontal" enctype="multipart/form-data">
      @csrf
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Ảnh đại diện</label>
      <div class="col-sm-10">
        <img class="img_form" src="{{asset('/uploads/images')}}/{{$data_user[0]['avatar']}}" alt="">
        <input type="file" name="avatar" id="avatar" value="">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Họ và tên</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="fullname" placeholder="Họ và tên" name="fullname" value="{{$data_user[0]['fullname']}}" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$data_user[0]['email']}}" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="username" name="username" value="{{$data_user[0]['username']}}">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control col-sm-8" style="float:left" id="password" name="password" value="">
        <a href="javascript:void(0)" type="button" id="btn_show_pass" class="btn btn-info btn-flat"><i id="icon_show" class="fas fa-eye"></i></a>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Điện thoại</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$data_user[0]['phone']}}">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Mô tả thông tin</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="description" placeholder="Mô tả" name="description">{{$data_user[0]['description']}}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <input type="hidden" class="form-control" id="id" name="id" value="{{$data_user[0]['id']}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <a href="javascript:void(0)" id="btn_update" class="btn btn-block btn-primary" onclick="update_data()"><i class="fas fa-save"></i> Cập nhật</a>
      </div>
    </div>
  </form>
  {{-- End: Form cập nhật thông tin --}}

  {{-- Dialog loading --}}
  <div id="loading" class="dialog_loading" style="display: none">
    <div class="progress-7"></div>
  </div>
</div>