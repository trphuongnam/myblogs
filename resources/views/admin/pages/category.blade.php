@extends('admin.layouts.master_layout')

@section('title', 'Quản lý chủ đề bài viết')

@section('content_title', 'Chủ Đề Bài Viết')
    
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            @if (session()->has('save_success'))
              <div class="alert alert-success alert-dismissible"><i class="icon fas fa-check"></i> {{session()->get('save_success')}}</div>
            @endif
            <a href="{{url('/admin/cat/add')}}" class="btn btn-app button_header" title="Thêm mới"><i class="fas fa-plus"></i>Thêm mới</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên chủ đề</th>
                  <th>Mô tả</th>
                  <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                {{-- {!!"<pre>".print_r($arr_category)."</pre>"!!} --}}
                @foreach ($arr_category as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="#" class="btn btn-app" title="Chi tiết"><i class="fas fa-eye"></i>Chi tiết</a>
                        <a href="{{url('/admin/cat/edit/')}}/{{$category->url_key}}-{{$category->uid}}" class="btn btn-app" title="Sửa"><i class="fas fa-edit"></i>Sửa</a>
                        <a href="{{url('/admin/cat/del/url_key')}}" class="btn btn-app" title="Xóa"><i class="fas fa-trash-alt"></i>Xóa</a>
                        <a href="#" class="btn btn-app" title="Ẩn"><i class="fas fa-ban"></i>Ẩn</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{$arr_category->links()}}

      </div>
      <!-- /.card -->
    <!-- /.col -->
  </div>
@endsection