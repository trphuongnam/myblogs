@extends('admin.layouts.master_layout')

@section('title', 'Giới thiệu website')

@section('content_title', 'Sửa Bài Viết - ....')
    
@section('content')
<div class="card">
    <div class="card-header">
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Tiêu đề:</label>
              <input type="text" class="form-control" name="name" value="">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Nội dung:</label>
                <textarea class="form-control" rows="3" name="content" value=""></textarea>
              </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Chọn ảnh:</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" value="" id="image" name="image">
                <label class="custom-file-label" for="exampleInputFile"></label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Url-key:</label>
                <input type="text" class="form-control" name="url_key" value="" disabled>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="hidden" class="form-control" name="uid" value="">
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
      </form>
    </div>
    <!-- /.card-body -->
  </div>
@endsection