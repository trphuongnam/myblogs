{{-- Begin: Content right --}}
<div class="d-none d-xl-block col-xl-3 right-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card rounded">
                <div class="card-body">
                    <h6 class="card-title">latest photos</h6>
                    <div class="latest-photos">
                        <div class="row">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar9.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        @php
            $most_viewed_post = App\Models\Post::orderBy('numview', 'DESC')->where('status', 1)
                                ->select('name', 'uid', 'url_key', 'numview', 'image')
                                ->limit(5)->get()->toArray();
        @endphp
        {{-- Phần bài viết xem nhiều nhất --}}
        <div class="col-md-12 grid-margin">
            <div class="card rounded">
                <div class="card-body">
                    <h6 class="card-title">Bài viết xem nhiều   </h6>

                    @foreach ($most_viewed_post as $item)
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                        <div class="d-flex align-items-center hover-pointer">
                            <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                            <div class="ml-2">
                                <a href="{{url('post/')}}/{{$item['url_key']}}-{{$item['uid']}}">{{$item['name']}}</a>
                                <p class="tx-11 text-muted">{{$item['numview']}} <i class="fas fa-eye"></i></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
        
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End: Content right --}}