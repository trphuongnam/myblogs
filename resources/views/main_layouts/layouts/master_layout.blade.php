<!DOCTYPE HTML>
<html>
	<head>
        @include('main_layouts/layouts/elements/meta')
        @include('main_layouts/layouts/elements/css')
        @include('main_layouts/layouts/elements/js')        

	</head>
	<body>
        <div class="fh5co-loader"></div>
	
        <div id="page">	
            {{-- Begin: Header --}}
            @include('main_layouts/layouts/elements/header')
            
            {{-- Begin: content --}}
            @section('content')
            @show
            {{-- End: Content --}}
            
            {{-- Begin: Footer --}}
            @include('main_layouts/layouts/elements/footer')
        </div>
</body>
</html>

