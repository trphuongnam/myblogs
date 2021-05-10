@extends('admin.layouts.master_layout')

@section('title', 'Quản lý thông tin website')

@section('content_title', 'Thông Tin Website')
    
@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{url('/admin/webinfo/edit/')}}/{{$website_info[0]['url_key']}}-{{$website_info[0]['uid']}}" class="btn btn-app button_header"><i class="fas fa-edit"></i>Chỉnh sửa</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Tên website:</label>
              <input type="text" class="form-control" name="name" value="{{$website_info[0]['name']}}" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Mô tả:</label>
              <textarea class="form-control" rows="3" name="description" readonly>{{$website_info[0]['description']}}</textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh đại diện website:</label>
            <div class="input-group">
              <div class="custom-file">
                <img src="" alt="Ảnh đại diện">
              </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh bìa website:</label>
            <div class="input-group">
              <div class="custom-file">
                <img src="" alt="Ảnh bìa"/>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" value="{{$website_info[0]['email']}}">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" class="form-control" name="phone" value="{{$website_info[0]['phone']}}">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Thông tin khác:</label>
                <input type="text" class="form-control" name="other" value="{{$website_info[0]['other']}}">
              </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
  </div>
@endsection