<script>

    /* Hàm hiển thị/ẩn dropdown */
    function dropdowns(uid)
    {
        
        var obj_dropdown = document.getElementById('dropdown_menu_'+uid);

        if(obj_dropdown.style.display == "none") obj_dropdown.style.display = "block";
        else obj_dropdown.style.display = "none";
        
    }
    /* End: function dropdowns(uid) */

    /* Hàm copy link bài viết */
    function copy_link(uid)
    {
        /* Tạo đối tượng copy link bài viết */
        var copyText = document.getElementById("post_link_"+uid);
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");

        /* Sau khi bấm copy xong thì dropdown sẽ ẩn */
        document.getElementById('dropdown_menu_'+uid).style.display = "none";

        /* Tạo thẻ div chứa thông báo đã copy thành công */
        var div_msg_copy = document.createElement("DIV");
            div_msg_copy.style.width = "150px";
            div_msg_copy.style.height = "40px";
            div_msg_copy.style.background = "mediumseagreen";
            div_msg_copy.style.zIndex = "100";
            div_msg_copy.style.display = "block";
            div_msg_copy.style.position = "fixed";
            div_msg_copy.style.color = "white";
            div_msg_copy.style.textAlign = "center";
            div_msg_copy.style.borderRadius = "5px";
            div_msg_copy.style.lineHeight = "40px";
            div_msg_copy.style.bottom = "5%";
            div_msg_copy.style.left = "5%";
            div_msg_copy.innerHTML = "<i class='fas fa-check-circle'></i> Đã sao chép link";
        
        /* Thêm thuộc tính id=msg_copy cho thẻ div */
            div_msg_copy.setAttribute("id", "msg_copy");

        /* Chèn thẻ div vào cuối phần body */
        document.body.appendChild(div_msg_copy);

        /* Cài đặt thời gian remove thẻ div sau khi hiển thị 5 giây */
        setTimeout(function(){ document.getElementById("msg_copy").remove(); }, 5000);
    }
    /* End: function copy_link(uid) */
    
    /* Ham comment bai viet */
    function post_comment(uid)
    {
        var formData = new FormData(document.getElementById('post_comment'));
            formData.append('uid_post', uid);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{url('/post/comment')}}",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (msg) {
                window.location.href = "{{url('/post/')}}/"+msg;
            },
            error: function (err) {
                console.log(err);
            }
        })

    }
    /* End: function post_comment() */

</script>