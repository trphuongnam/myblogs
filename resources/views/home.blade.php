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
                                        <input type="text" id="post_link_{{$item->uid}}" value="{{url('post/')}}/{{$item->url_key}}-{{$item->uid}}" style="display: none">
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
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Like</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Comment</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share icon-md">
                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                        <polyline points="16 6 12 2 8 6"></polyline>
                                        <line x1="12" y1="2" x2="12" y2="15"></line>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Share</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- middle wrapper end -->

<script>

    /* Hàm hiển thị/ẩn dropdown */
    function dropdowns(uid)
    {
        
        var obj_dropdown = document.getElementById('dropdown_menu_'+uid);

        if(obj_dropdown.style.display == "none") obj_dropdown.style.display = "block";
        else obj_dropdown.style.display = "none";
        
    }
    /* End: function dropdowns(uid) */

    /* Hàm copy link bài viết */
    function copy_link(uid)
    {

        /* Tạo đối tượng copy link bài viết */
        var copyText = document.getElementById("post_link_"+uid);
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
        
        /* Sau khi bấm copy xong thì dropdown sẽ ẩn */
        document.getElementById('dropdown_menu_'+uid).style.display = "none";

        /* Tạo thẻ div chứa thông báo đã copy thành công */
        var div_msg_copy = document.createElement("DIV");
            div_msg_copy.style.width = "150px";
            div_msg_copy.style.height = "40px";
            div_msg_copy.style.background = "mediumseagreen";
            div_msg_copy.style.zIndex = "100";
            div_msg_copy.style.display = "block";
            div_msg_copy.style.position = "fixed";
            div_msg_copy.style.color = "white";
            div_msg_copy.style.textAlign = "center";
            div_msg_copy.style.borderRadius = "5px";
            div_msg_copy.style.lineHeight = "40px";
            div_msg_copy.style.bottom = "5%";
            div_msg_copy.style.left = "5%";
            div_msg_copy.innerHTML = "<i class='fas fa-check-circle'></i> Đã sao chép link";
        
        /* Thêm thuộc tính id=msg_copy cho thẻ div */
            div_msg_copy.setAttribute("id", "msg_copy");

        /* Chèn thẻ div vào cuối phần body */
        document.body.appendChild(div_msg_copy);

        /* Cài đặt thời gian remove thẻ div sau khi hiển thị 5 giây */
        setTimeout(function(){ document.getElementById("msg_copy").remove(); }, 5000);
    }
    /* End: function copy_link(uid) */
    
</script>
@endsection