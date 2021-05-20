@extends('main_layouts.layouts.master_layout')
@section('title', 'Trang Chủ')
    
@section('content')

    {{-- Phần About --}}
    @include('main_layouts/pages/about')

    {{-- Begin: Phần Sơ yếu lý lịch --}}
    @include('main_layouts/pages/resume')

    {{-- Begin: Phần kỹ năng --}}
    @include('main_layouts/pages/skill')

    {{-- Begin: Phần các dự án --}}
    @include('main_layouts/pages/project')

    {{-- Begin: Phần các bài post --}}
    @include('main_layouts/pages/post')

    {{-- Begin: Phần quote --}}
    {{-- @include('main_layouts/pages/quote') --}}

    {{--  Begin: Phần sở thích --}}
    @include('main_layouts/pages/interest')

    {{-- Phần liên hệ --}}
    @include('main_layouts/pages/contact')

    {{-- Phần map --}}
    @include('main_layouts/pages/map')

@endsection
