<div class="box_detail" id="box_detail_{{$item['uid']}}" style="display:none">
    <div class="col-12">
        <!-- Default box -->
        <div class="card content">

            {{-- Phần tiêu đề và nút tắt --}}
            <div class="card-header" id="header_{{$item['uid']}}">
                <h3 class="card-title" id="title_{{$item['uid']}}"></h3>

                <div class="card-tools">
                <button type="button" class="btn btn-tool" id="close_{{$item['uid']}}" onclick="show_detail('{{$item['uid']}}')" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
                </div>
            </div>

            {{-- Nội dung --}}
            <div class="card-body" id="content_{{$item['uid']}}" style="max-height:350px; overflow:auto"></div>

            {{-- Phần footer --}}
            <div class="card-footer" id="footer_{{$item['uid']}}"></div>
        </div>
        <!-- /.card -->
    </div>
</div>