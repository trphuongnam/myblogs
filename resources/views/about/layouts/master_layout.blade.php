<!DOCTYPE HTML>
<html>
	<head>
        @include('about/layouts/elements/meta')
        @include('about/layouts/elements/css')
        @include('about/layouts/elements/js')        

	</head>
	<body>
        <div class="fh5co-loader"></div>
	
        <div id="page">	
            {{-- Begin: Header --}}
            @include('about/layouts/elements/header')
            
            {{-- Begin: content --}}
            @section('content')
            @show
            {{-- End: Content --}}
            
            {{-- Begin: Footer --}}
            @include('about/layouts/elements/footer')
        </div>
</body>
</html>

