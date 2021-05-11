<?php
    $tmp = \App\Models\WebsiteInfo::find(1);
?>

{{-- Begin: Content left --}}
<div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
    <div class="card rounded">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <h6 class="card-title mb-0">About</h6>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-branch icon-sm mr-2">
                                <line x1="6" y1="3" x2="6" y2="15"></line>
                                <circle cx="18" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M18 9a9 9 0 0 1-9 9"></path>
                            </svg> <span class="">Update</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg> <span class="">View all</span></a>
                    </div>
                </div>
            </div>
            <p>{{ $tmp->description }}</p>
            <div class="mt-3">
                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Điện thoại:</label>
                <p class="text-muted"><a href="javascript:void(0)">{{ $tmp->phone }}</a></p>
            </div>
            <div class="mt-3">
                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                <p class="text-muted"><a href="javascript:void(0)">{{ $tmp->email }}</a></p>
            </div>
            <div class="mt-3">
                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Facebook:</label>
                <p class="text-muted"><a href="{{ $tmp->facebook }}" target="_blank">{{ $tmp->facebook }}</a></p>
            </div>
        </div>
    </div>
</div>
{{-- End: Content left --}}