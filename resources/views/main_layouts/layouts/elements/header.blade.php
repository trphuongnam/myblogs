@php
    $data_header = App\Models\WebsiteInfo::find(1)->select('name', 'avatar', 'cover_image', 'facebook', 'email')->get()->toArray();
@endphp
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url({{asset('uploads/images')}}/{{$data_header[0]['cover_image']}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <div class="profile-thumb" style="background: url('{{asset('uploads/images')}}/{{$data_header[0]['avatar']}}');"></div>
                        <h1><span id="website_name">{{$data_header[0]['name']}}</span></h1>
                        <h3><span>Web Developer / Designer</span></h3>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="{{$data_header[0]['facebook']}}" target="_blank"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="#"><i class="icon-mail"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>