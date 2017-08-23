<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Trang chủ</title>
</head>
<body>

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-align: center; background: #ccc;">Home</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3>sibar-left</h3>
                    <ul>
                        <li>Đặng Văn Cường</li>
                        <li>Nguyễn Văn A</li>
                        <li>Nguyễn Văn B</li>
                        <li>Nguyễn Văn C</li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h3>content</h3>
                    @foreach($new_content as $a)
                        <h3>{{$a->title}}</h3>
                        <p>{{$a->content}}</p>
                        @endforeach
                </div>
                <div class="col-md-2">
                    <h3>Đăng Nhập</h3>
                    <label for="name">
                        Email:
                        <input type="text" placeholder="email">
                    </label>

                    <label for="password">password:
                        <input type="text"placeholder="password">
                    </label>
                    <input type="submit" value="login" class="pull-right">
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Liên Hệ</h3>
                    <ol>
                        <li><strong>Địa Chỉ: </strong><span>số nhà 80, Ngọc Trục, Đại Mỗ, Nam Từ Liêm, Hà Nội</span></li>
                        <li><strong>Số điện thoại: 0123.456.789</strong></li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <h3>Thông Tin</h3>
                    <p>là người hiền lành ngoan ngoãn chăm chỉ</p>
                </div>
                <div class="col-md-4">
                    <h3>Hình Ảnh</h3>
                    <img src="" alt="ảnh đại diện" width="100" height="100">
                </div>
            </div>
        </div>
    </div>
</body>
</html>