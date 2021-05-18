@extends('layouts.master_layout')
@section('title', 'Trang Chủ')

@section('content')
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
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
                                    <button class="btn" id="dropdowns_{{$post[0]->uid}}" onclick="dropdowns('{{$post[0]->uid}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" id="dropdown_menu_{{$post[0]->uid}}" style="display:none">
                                        <input type="text" class="post_link" id="post_link_{{$post[0]->uid}}" value="{{url('post/')}}/{{$post[0]->url_key}}-{{$post[0]->uid}}">
                                        <a class="dropdown-item d-flex align-items-center" id="coppy_link_{{$post[0]->uid}}" onclick="copy_link('{{$post[0]->uid}}')" href="javascript:void(0)">Copy link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- {{var_dump($post)}} --}}
                        <div class="card-body">
                            <h3 class="post_name">{!!$post[0]->name!!}</h3>
                            <p class="mb-3 tx-14">{!!$post[0]->description!!}<br></p>
                            <p class="mb-3 tx-14">{!!$post[0]->content!!}<br></p>

                            <img class="img-fluid" src="{{asset('/uploads/images')}}/{!!$post[0]->image!!}" alt="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex post-actions">
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <i class="fas fa-heart"></i>
                                    <span class="d-none d-md-block ml-2">Like</span>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <i class="fas fa-comment-dots"></i>
                                    <span class="d-none d-md-block ml-2">Comment</span>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                    <i class="fas fa-share"></i>
                                    <span class="d-none d-md-block ml-2">Share</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- middle wrapper end -->

        @include('/layouts/elements/js/js_post_dropdown')
@endsection