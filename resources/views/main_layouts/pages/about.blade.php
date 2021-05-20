@php
    $about = App\Models\WebsiteInfo::find(1)->get()->toArray();
@endphp
<div id="fh5co-about" class="animate-box area_content">
    <div class="container">
        <div class="row">
            <div class="col-esumemd-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Giới Thiệu Về Tôi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="info">
                    <li><span class="first-block">Full Name:</span><span class="second-block">{{$about[0]['name']}}</span></li>
                    <li><span class="first-block">Phone:</span><span class="second-block">{{$about[0]['phone']}}</span></li>
                    <li><span class="first-block">Email:</span><span class="second-block">{{$about[0]['email']}}</span></li>
                    <li><span class="first-block">Website:</span><span class="second-block">www.tranphuongnam.com</span></li>
                    <li><span class="first-block">Address:</span><span class="second-block">K104/06 Đoàn Phú Tứ - Hòa Khánh Bắc - Liên Chiểu - Đà Nẵng</span></li>
                </ul>
            </div>
            <div class="col-md-8">
                <h2>Hello!</h2>
                <p>{{$about[0]['description']}}</p>
                <p>
                    <ul class="fh5co-social-icons social_network">
                        <li><a href="javascript:void(0)" target="_blank"><i class="icon-facebook3"></i></a>&nbsp;{{$about[0]['facebook']}}</li><br>
                        <li><a href="javascript:void(0)" target="_blank"><i class="icon-instagram"></i></a>&nbsp;https://www.instagram.com/phuongnamgroupers/</li><br>
                        <li><a href="javascript:void(0)"><i class="icon-mail"></i></a>&nbsp;{{$about[0]['email']}}</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>