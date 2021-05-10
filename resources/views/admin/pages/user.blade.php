@extends('admin.layouts.master_layout')

@section('title', 'Quản lý người dùng')

@section('content_title', 'Người Dùng')
    
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{url('/admin/user/add')}}" class="btn btn-app" title="Thêm mới"><i class="fas fa-plus"></i>Thêm mới</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                <th>Stt</th>
                <th>Tên bài</th>
                <th>Mô tả</th>
                <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td>
                        <a href="#" class="btn btn-app" title="Sửa"><i class="fas fa-eye"></i>Chi tiết</a>
                        <a href="{{url('/admin/user/edit/url_key')}}" class="btn btn-app" title="Sửa"><i class="fas fa-edit"></i>Sửa</a>
                        <a href="{{url('/admin/user/del/url_key')}}" class="btn btn-app" title="Xóa"><i class="fas fa-trash-alt"></i>Xóa</a>
                        <a href="#" class="btn btn-app" title="Block"><i class="fas fa-ban"></i>Block</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Internet
                        Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>
                        <a href="#" class="btn btn-app" title="Sửa"><i class="fas fa-eye"></i>Chi tiết</a>
                        <a href="{{url('/admin/user/edit/url_key')}}" class="btn btn-app" title="Sửa"><i class="fas fa-edit"></i>Sửa</a>
                        <a href="{{url('/admin/user/del/url_key')}}" class="btn btn-app" title="Xóa"><i class="fas fa-trash-alt"></i>Xóa</a>
                        <a href="#" class="btn btn-app" title="Block"><i class="fas fa-ban"></i>Block</a>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    <!-- /.col -->
  </div>
@endsection