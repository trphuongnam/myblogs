@extends('about.layouts.master_layout')
@section('title', 'Trần Phương Nam')
    
@section('content')

    {{-- Phần About --}}
    @include('about/pages/about')

    {{-- Begin: Phần Sơ yếu lý lịch --}}
    @include('about/pages/resume')

    {{--  Begin: Phần dịch vụ --}}
    @include('about/pages/service')

    {{-- Begin: Phần kỹ năng --}}
    @include('about/pages/skill')

    {{-- Begin: Phần các dự án --}}
    @include('about/pages/project')

    {{-- Begin: Phần các bài post --}}
    @include('about/pages/post')

    {{-- Begin: Phần quote --}}
    @include('about/pages/quote')

    {{-- Phần liên hệ --}}
    @include('about/pages/contact')

    {{-- Phần map --}}
    @include('about/pages/map')

@endsection
