<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email xác nhận mật khẩu</title>

    <style>
        *{
            text-align: center;
        }
        #wrapper{
            width: 1000px;
            height: 100%;
            background-color: darkturquoise;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>Nam Trần Blog</h1>
        <h3>Xác Nhận Mật Khẩu</h3>
        <p>
            Fullname: {{$info_send['fullname']}} <br>
            Email: {{$info_send['email']}} <br>
            Phone: {{$info_send['phone']}} <br>
            Username: {{$info_send['username']}} <br>
            
            Mật khẩu của bạn là: {{$info_send['new_password']}}
        </p>
    </div>
</body>
</html>