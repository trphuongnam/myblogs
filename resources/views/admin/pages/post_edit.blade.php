@extends('admin.layouts.master_layout')

@section('title', 'Quản lý bài viết')

@section('content_title', "Sửa Bài Viết - ".$post[0]['name'])
    
@section('content')

<div class="card">
    <div class="card-header">
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{url('/admin/post/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Chủ đề:</label>
          <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            
            @foreach ($category as $cat)
              <option data-select2-id="30" value="{{$cat['id']}}">{{$cat['name']}}</option>
            @endforeach
            
          </select>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Tiêu đề:</label>
              <input type="text" class="form-control" name="name" value="{{$post[0]['name']}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Mô tả:</label>
              <textarea class="form-control" rows="3" name="description" value="">{{$post[0]['description']}}</textarea>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Nội dung:</label>
                <textarea class="form-control" rows="3" name="content" value="">{{$post[0]['content']}}</textarea>
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
            <img class="img_form" src="{{asset('uploads/images')}}/{{$post[0]['image']}}" alt="">
        </div>
        <div class="row">
          <div class="col-sm-12">
            <!-- radio -->
            <div class="form-group">
                <label>Trạng thái:</label>
                <div class="form-check">
                    @php
                        $checked = "";
                        if($post[0]['status'] == 1) $checked = "checked";
                    @endphp
                    
                    <input class="form-check-input" value="1" type="radio" name="status" {{$checked}}>
                    <label class="form-check-label">Hiển thị</label>
                </div>
                <div class="form-check">
                    @php
                        $checked = "";
                        if($post[0]['status'] == 0) $checked = "checked";
                    @endphp
                    <input class="form-check-input" value="0" type="radio" name="status" {{$checked}}>
                    <label class="form-check-label">Ẩn</label>
                </div>
            </div>
          </div>
        </div>
        <input type="hidden" class="form-control" name="id" value="{{$post[0]['id']}}">
        <button type="submit" class="btn btn-app button_header"><i class="fas fa-save"></i>Lưu</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  @include('/admin/layouts/elements/ckeditorjs')

@endsection