<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Facebook config --}}
    <meta property="og:url"           content="{{url()->current()}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Trần Phương Nam Blog" />
    <meta property="og:description"   content="Đây là website cá nhân của Trần Phương Nam" />
    <meta property="og:image"         content="http://localhost/myblog/public/uploads/images/namtp_avatar16213094642552.jpg" />
    {{-- Facebook config --}}

    <title>@yield('title') - Trần Phương Nam</title>
    
    {{-- Load css --}}
    @include('layouts/elements/css')

    {{-- Load script --}}
    @include('layouts/elements/js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Load Facebook SDK for JavaScript -->

    <div class="container">
        <div class="profile-page tx-13">

            {{-- Phần header --}}
            @include('layouts/elements/header')

            {{-- Phần content --}}
            <div class="row profile-body">

                {{-- Phần content trái --}}
                @include('layouts/elements/content_left')

                {{-- Phần content giữa --}}
                @section('content')

                @show

                {{-- Phần content phải --}}
                @include('layouts/elements/content_right')
            </div>
        </div>
    </div>
</body>
</html>