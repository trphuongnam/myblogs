<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Trần Phương Nam</title>
    
    {{-- Load css --}}
    @include('layouts/elements/css')

    {{-- Load script --}}
    @include('layouts/elements/js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
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