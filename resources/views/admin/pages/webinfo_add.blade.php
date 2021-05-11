@extends('admin.layouts.master_layout')

@section('title', 'Quản lý thông tin website')

@section('content_title', 'Nhập Thông Tin Website')
    
@section('content')
<div class="card">
    <div class="card-header">
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{url('/admin/webinfo/save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Tên website:</label>
              <input type="text" class="form-control" name="name" value="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Mô tả:</label>
              <textarea class="form-control" rows="3" name="description" value=""></textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh đại diện website:</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" value="" id="avatar" name="avatar">
              </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh bìa website:</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" value="" id="cover_image" name="cover_image">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" class="form-control" name="phone" value="">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Facebook:</label>
                <input type="text" class="form-control" name="facebook" value="">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Thông tin khác:</label>
                <input type="text" class="form-control" name="other" value="">
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-sm-12">
            <!-- radio -->
            <div class="form-group">
                <label>Trạng thái:</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="radio1" checked>
                    <label class="form-check-label">Hiển thị</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="radio1">
                    <label class="form-check-label">Ẩn</label>
                </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-app button_header"><i class="fas fa-save"></i>Lưu</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
@endsection