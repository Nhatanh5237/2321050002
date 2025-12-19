<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPT Play</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start(); //session
    // if (!isset($_SESSION["username"])) { //kiểm tra session (đăng nhập), nếu chưa, chuyển sang trang login
    //     header("location: login.php");
    // }
    ?>
    <header>
        <div class="container">
            <div class="head1">
                <img src="img/logo.png" width="200px" height="100" alt="FPT Play">
                <a href="index.php?page_layout=trangchu">Trang chủ</a>
                <a href="index.php?page_layout=phim">Phim</a>
                <a href="index.php?page_layout=theloai">Thể loại</a>
                <a href="index.php?page_layout=quocgia">Quốc gia</a>
                <a href="index.php?page_layout=nguoidung">Người dùng</a>
                <a href="index.php?page_layout=phimtheloai">Phim thể loại</a>
            </div>
            <div class="head2">
                <div><a href="#">Tìm kiếm</a></div>
                <div><a href="#">Thông báo</a></div>
                <a href="https://fptplay.vn/mua-goi" target="_blank"
                    style="padding: 10px 20px; background-color: rgb(230, 84, 48); border-radius: 15px;">Mua
                    gói</a>
                <div><a href="#">Đăng nhập</a></div>
            </div>
        </div>
    </header>

    <div style="margin-top: 12vh;>
        <?php
        if (isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'trangchu':
                    include "trangchu.php";
                    break;
                case 'phim':
                    include "phim.php";
                    break;
                case 'theloai':
                    include "theloai.php";
                    break;
                case 'quocgia':
                    include "quocgia.php";
                    break;
                case 'nguoidung':
                    include "nguoidung.php";
                    break;
                case 'phimtheloai':
                    include "phimtheloai.php";
                    break;
                case 'themnguoidung':
                    include "them/themnguoidung.php";
                    break;
                case 'themphim':
                    include "them/themphim.php";
                    break;
                case 'themquocgia':
                    include "them/themquocgia.php";
                    break;
                case 'themtheloai':
                    include "them/themtheloai.php";
                    break;
                case 'capnhatnguoidung':
                    include "capnhat/capnhatnguoidung.php";
                    break;
                case 'capnhatphim':
                    include "capnhat/capnhatphim.php";
                    break;
                case 'capnhatquocgia':
                    include "capnhat/capnhatquocgia.php";
                    break;
                case 'capnhattheloai':
                    include "capnhat/capnhattheloai.php";
                    break;
                case 'chi_tiet_phim':
                    include "chi_tiet_phim.php";
                    break;
                default:
                    include "trangchu.php";
                    break;
            }
        } else {
            include "trangchu.php";
        }
        ?>
    </div>
</body>

</html>