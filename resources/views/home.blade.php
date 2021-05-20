@extends('layouts.master_layout')
@section('title', 'Trang Chủ')

@section('content')
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
                
                @foreach ($post as $item)
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="img-xs rounded-circle" src="{{asset('/uploads/images')}}/{{$post[0]->user_avatar}}" alt="">
                                    <div class="ml-2">
                                        <p>{{$post[0]->user_fname}}</p>
                                        <p class="tx-11 text-muted">{{date('d-m-Y', strtotime($post[0]->created_at))}}</p>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn" id="dropdowns_{{$item->uid}}" onclick="dropdowns('{{$item->uid}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" id="dropdown_menu_{{$item->uid}}" style="display:none">
                                        <input type="text" class="post_link" id="post_link_{{$item->uid}}" value="{{url('post/')}}/{{$item->url_key}}-{{$item->uid}}">
                                        <a class="dropdown-item d-flex align-items-center" id="coppy_link_{{$item->uid}}" onclick="copy_link('{{$item->uid}}')" href="javascript:void(0)">Copy link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="post_name">{!!$item->name!!}</h3>
                            <p class="mb-3 tx-14">{!!$item->description!!}<br><a href="{{url('post/')}}/{{$item->url_key}}-{{$item->uid}}" class="link_detail">Xem thêm</a></p>
                            
                            <img class="img-fluid" src="{{asset('/uploads/images')}}/{!!$item->image!!}" alt="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex post-actions">
                                <a href="javascript:;" class="d-flex align-items-center mr-4">
                                    <i class="fas fa-heart"></i>
                                    <span class="d-none d-md-block ml-2">Like</span>
                                </a>

                                @php
                                    /* Đếm số lượt bình luận */
                                    $num_comment = App\Models\Post::find($item->id)->comment()->count();

                                @endphp
                                <a href="{{url('post/')}}/{{$item->url_key}}-{{$item->uid}}#comment" class="d-flex align-items-center mr-4">
                                    <i class="fas fa-comment-dots"></i>
                                    <span class="d-none d-md-block ml-2">Comment - ({{$num_comment}} Bình luận)</span>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center mr-4">
                                    <i class="fas fa-share"></i>
                                    <span class="d-none d-md-block ml-2">Share</span>
                                </a>
                                <a href="javascript:void(0);" class="d-flex align-items-center ">
                                    <i class="fas fa-eye"></i>
                                    <span class="d-none d-md-block ml-2">{!!$item->numview!!}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- middle wrapper end -->

        @include('/layouts/elements/js/js_post_dropdown')
        
@endsection