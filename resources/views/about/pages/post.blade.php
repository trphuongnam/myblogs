@php
    $posts = App\Models\Post::orderBy('posts.id', 'DESC')->where('posts.status', '=', '1')
                            ->join('categories', 'categories.id', '=', 'posts.id_cat')
                            ->join('users', 'users.id', '=', 'posts.id_user')
                            ->select('posts.name', 'posts.uid', 'posts.description', 'posts.url_key', 'posts.image', 'posts.created_at', 'posts.numview',
                                     'users.fullname as user_fname', 'users.url_key as user_url_key', 'users.uid as user_uid',
                                     'categories.name as cat_name', 'categories.uid as cat_uid', 'categories.url_key as cat_url_key'
                                    )
                            ->get()->toArray();
@endphp
<div id="fh5co-blog" class="area_content">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>My Posts</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $item)       
            
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-bg" style="background-image: url({{asset('uploads/images')}}/{{$item['image']}});"></a>
                    <div class="blog-text">
                        <span class="posted_on">{{date('d/m/Y H:i A', strtotime($item['created_at']))}}</span>
                        <h3><a href="{{url('posts/')}}/{{$item['url_key']}}-{{$item['uid']}}">{{$item['name']}}</a></h3>
                        <p>{{$item['description']}}</p>
                        <ul class="stuff">
                            <li><i class="icon-heart2"></i>249</li>
                            <li><i class="icon-eye2"></i>{{$item['numview']}}</li>
                            <li><a href="{{url('post/')}}/{{$item['url_key']}}-{{$item['uid']}}">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>