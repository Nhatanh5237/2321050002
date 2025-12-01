<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php?page_layout=capnhatnguoidung&id=<?php echo $id ?>" method="post">
        <div class="container">
            <h1>Cập nhật người dùng</h1>
            <div class="box">
                <p>Tên đăng nhập</p>
                <input type="text" name"ten-dang-nhap" placeholder="Tên đăng nhập">
            </div>
            <div class="box">
                <p>Mật khẩu</p>
                <input type="password" name"password" placeholder="Mật khẩu">
            </div>
            <div class="box">
                <p>Họ tên</p>
                <input type="text" name"ho-ten" placeholder="Họ tên">
            </div>
            <div class="box">
                <p>Email</p>
                <input type="mail" name"email" placeholder="Email">
            </div>
            <div class="box">
                <p>Số điện thoại</p>
                <input type="text" name"so-dien-thoai" placeholder="Số điện thoại">
            </div>
            <div class="box">
                <p>Ngày sinh</p>
                <input type="date" name"ngay-sinh" placeholder="Ngày sinh">
            </div>
            <div class="box">
                <input type="submit" value="Thêm mới">
            </div>
        </div>

        <?php
        if (
            !empty($POST['ten-dang-nhap']) &&
            !empty($POST['password']) &&
            !empty($POST['ho-ten']) &&
            !empty($POST['email']) &&
            !empty($POST['so-dien-thoai']) &&
            !empty($POST['ngay-sinh']) &&
            !empty($POST['vai-tro'])
        ) {

            $tenDangNhap = $_POST['ten-dang-nhap'];
            $password = $_POST['password'];
            $hoTen = $_POST['ho-ten'];
            $email = $_POST['email'];
            $soDienThoai = $_POST['so-dien-thoai'];
            $ngaySinhs = $_POST['ngay-sinh'];
            $vaiTro = $_POST['vai-tro'];

            // $sql ="INSERT INTO 'nguoi_dung'('ten_dang_nhap', 'mat-khau', 'ho_ten)"
            echo $sql;

            header('location: index.php?page_layout=nguoidung');
        } else {
            echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin!</p>";
        }
        ?>

    </form>

</body>

</html>