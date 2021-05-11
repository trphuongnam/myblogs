@extends('admin.layouts.master_layout')

@section('title', 'Quản lý thông tin website')

@section('content_title', 'Sửa Thông Tin Website')
    
@section('content')
<div class="card">
    <div class="card-header">
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{url('/admin/webinfo/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Tên website:</label>
              <input type="text" class="form-control" name="name" value="{{$webinfo[0]['name']}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Mô tả:</label>
              <textarea class="form-control" rows="3" name="description" value="">{{$webinfo[0]['description']}}</textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh đại diện website:</label>
            <div class="input-group">
              <div class="custom-file">
                @if ($webinfo[0]['avatar'] !== "")
                    <img src="{{asset('/uploads/images')}}{{$webinfo[0]['avatar']}}">
                @endif
                <input type="file" value="{{$webinfo[0]['avatar']}}" id="avatar" name="avatar">
              </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh bìa website:</label>
            <div class="input-group">
              <div class="custom-file">
                @if ($webinfo[0]['cover_image'] !== "")
                    <img src="{{asset('/uploads/images')}}{{$webinfo[0]['cover_image']}}">
                @endif
                <input type="file" value="{{$webinfo[0]['cover_image']}}" id="cover_image" name="cover_image">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="{{$webinfo[0]['email']}}">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" class="form-control" name="phone" value="{{$webinfo[0]['phone']}}">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Facebook:</label>
                <input type="text" class="form-control" name="facebook" value="{{$webinfo[0]['facebook']}}">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Thông tin khác:</label>
                <input type="text" class="form-control" name="other" value="{{$webinfo[0]['other']}}">
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
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="{{$webinfo[0]['id']}}">
              </div>
            </div>
        </div>
        <button type="submit" class="btn btn-app button_header"><i class="fas fa-save"></i>Lưu</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
@endsection