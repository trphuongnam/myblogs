<?php
    $data_website = \App\Models\WebsiteInfo::find(1)->get()->toArray();
?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="profile-header">
            <div class="cover">
                <div class="gray-shade"></div>
                <figure>
                    <img src="{{asset('/uploads/images')}}/{{$data_website[0]['cover_image']}}" class="img-fluid cover_image" alt="profile cover">
                </figure>
                <div class="cover-body d-flex justify-content-between align-items-center">
                    <div>
                        <img class="profile-pic" src="{{asset('/uploads/images')}}/{{$data_website[0]['avatar']}}" alt="profile">
                        <span class="profile-name">Trần Phương Nam - Web Developer</span>
                    </div>
                </div>
            </div>
            <div class="header-links">
                <ul class="links d-flex align-items-center mt-3 mt-md-0">
                    <li class="header-link-item d-flex align-items-center active">
                        <i class="fas fa-home">&nbsp;&nbsp;</i>
                        <a class="pt-1px d-none d-md-block" href="{{url('/')}}">TRANG CHỦ</a>
                    </li>
                    <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                        <i class="fas fa-address-card">&nbsp;&nbsp;</i>
                        <a class="pt-1px d-none d-md-block" href="{{url('/about')}}">GIỚI THIỆU</a>
                    </li>
                    <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                        <i class="fas fa-images">&nbsp;&nbsp;</i>
                        <a class="pt-1px d-none d-md-block" href="{{url('/albums')}}">ẢNH</a>
                    </li>
                    <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                        <i class="fas fa-file-invoice">&nbsp;&nbsp;</i>
                        <a class="pt-1px d-none d-md-block" href="{{url('/mycv')}}">CV CỦA TÔI</a>
                    </li>
                    <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                        <i class="fas fa-paper-plane">&nbsp;&nbsp;</i>
                        <a class="pt-1px d-none d-md-block" href="{{url('/contact')}}">LIÊN HỆ CHO TÔI</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>