@extends('admin.layouts.master_layout')

@section('title', 'Quản lý chủ đề bài viết')

@section('content_title', "Sửa Chủ Đề")

@section('content')
<div class="card">
    <div class="card-header">
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{url('/admin/cat/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Tiêu đề:</label>
              <input type="text" class="form-control" name="name" value="{{$data_cat_edit[0]['name']}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Mô tả:</label>
              <textarea class="form-control" rows="3" name="description">{{$data_cat_edit[0]['description']}}</textarea>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Url-key:</label>
                <input type="text" class="form-control" name="url_key" value="{{$data_cat_edit[0]['url_key']}}">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="{{$data_cat_edit[0]['id']}}">
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <!-- radio -->
            <div class="form-group">
                <label>Trạng thái:</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="status" checked>
                    <label class="form-check-label">Hiển thị</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="status">
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