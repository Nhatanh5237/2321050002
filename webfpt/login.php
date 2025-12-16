<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2</title>

    <style>
        .warning {
            color: red;
        }
    </style>
</head>

<body>

    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng Nhập">
        </div>
    </form>
    <?php
    include("connect.php"); //nối code ở file connect.php, tránh lặp code, có thể gọi đến database để nối dữ liệu
    if (isset($_POST['username']) && isset($_POST['password'])) { //isset: kiểm tra có thông tin hay không
    

        $tenDangNhap = $_POST['username'];
        $matKhau = $_POST['password'];


        $sql = "select * from nguoi_dung where ten_dang_nhap = '$tenDangNhap' and mat_khau = '$matKhau'";
        //câu lệnh lấy tài khoản (tenDangNhap và matKhau) từ database

        $result = mysqli_query($conn, $sql);
        //chạy câu lệnh sql trong code php ra kết quả


        if (mysqli_num_rows($result) > 0) { // > 0 nghĩa là nếu có dữ liệu
            //kiểm tra đăng nhập, nếu đúng admin, khởi tạo session với tên đăng nhập
            session_start();
            $_SESSION["username"] = $tenDangNhap;

            header('location: trangChu.php'); //nối sang trang index.php

        } else { // không có dữ liệu trả ra thì warning
            echo "<p class='warning'>Sai thông tin đăng nhập</p>";
        }
    }
    ?>


</body>

</html>