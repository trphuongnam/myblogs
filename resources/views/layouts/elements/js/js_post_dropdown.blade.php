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
            div_msg_copy.style.width = "auto";
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
            div_msg_copy.style.padding = "0px 10px";
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
                
                window.location.href = msg;

                /* Tạo thẻ div chứa thông báo đã bình luận thành công */
                var div_msg_comment = document.createElement("DIV");
                    div_msg_comment.style.width = "auto";
                    div_msg_comment.style.height = "40px";
                    div_msg_comment.style.background = "mediumseagreen";
                    div_msg_comment.style.zIndex = "100";
                    div_msg_comment.style.display = "block";
                    div_msg_comment.style.position = "fixed";
                    div_msg_comment.style.color = "white";
                    div_msg_comment.style.textAlign = "center";
                    div_msg_comment.style.borderRadius = "5px";
                    div_msg_comment.style.lineHeight = "40px";
                    div_msg_comment.style.bottom = "5%";
                    div_msg_comment.style.left = "5%";
                    div_msg_comment.style.padding = "0px 10px";
                    div_msg_comment.innerHTML = "<i class='fas fa-check-circle'></i> Đã đăng bình luận";
                
                /* Thêm thuộc tính id=msg_copy cho thẻ div */
                div_msg_comment.setAttribute("id", "msg_comment");

                /* Chèn thẻ div vào cuối phần body */
                document.body.appendChild(div_msg_comment);

                /* Cài đặt thời gian remove thẻ div sau khi hiển thị 5 giây */
                setTimeout(function(){ document.getElementById("msg_comment").remove(); }, 5000);
            },
            error: function (err) {
                console.log(err);
            }
        })

    }
    /* End: function post_comment() */

    /* Begin: Hàm hiển thị bình luận bài viết */
    $(document).ready(function(){
        var uid_post = document.getElementById('uid_post').value;

        $.ajax({
            url: "{{url('/post/show_comment')}}/"+uid_post,
            cache: false
        })
        .done(function( data ) {
            
            var num_comment = data.length;
            var str_div = "";
            
            for(var i = 0; i < data.length; i++)
            {   
                var website = "";
                if(data[i]['website'] != null) website = data[i]['website']+" - ";
                str_div += "<div class='box_comment' id='box_comment_"+i+"'><div class='info_person' id='inf_person_"+i+"'><b>"+data[i]['name_person']+"</b> - "+data[i]['email']+"<br>"+website+data[i]['created_at'].toLocaleString()+"</div><div class='comment_content' id='comment_content_"+i+"'>"+data[i]['content']+"</div></div>";
            }        

            return $( "#show_comment" ).append(str_div);
        });
    })
</script>