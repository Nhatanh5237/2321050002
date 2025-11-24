<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2 php</title>
</head>

<body>

</body>
<?php
// cookie
// # lưu ở phía người dùng
// # dùng cho những thông tin ít quan trọng
$cookieName = "user";
$cookieValue = "NgocAnh";
// 86400 = 30 ngay
setcookie($cookieName, $cookieValue, time() + (86400), "/");

if (isset($_COOKIE[$cookieName])) {
    echo "cookie đã tồn tại";
} else {
    echo "cookie chưa tồn tại";
}

setcookie($cookieName, $cookieValue, )

    // session
# thông tin đăng nhập, giỏ hàng,...
session_start();
$_SESSION["name"];
    ?>

</html>