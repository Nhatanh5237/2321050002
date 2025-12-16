<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPT Play</title>
</head>
<style>
    nav {
        display: flex;
        justify-content: space-between;
        background-color: red;
        padding: 10px;
        border-radius: 5px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin-right: 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <?php
    session_start(); //session
    if (!isset($_SESSION["username"])) { //kiểm tra session (đăng nhập), nếu chưa, chuyển sang trang login
        header("location: login.php");
    }
    ?>
    <header>
        <nav>
            <ul>
                <!-- Nối trang -->
                <li><a href="trangchu.php">Trang Chủ</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
                <li><a href="index.php?page_layout=theloai">Thể Loại</a></li>
                <li><a href="index.php?page_layout=quocgia">Quốc Gia</a></li>
                <li><a href="index.php?page_layout=nguoidung">Người Dùng</a></li>
                <li><a href="index.php?page_layout=phimtheloai">Phim Thể Loại</a></li>
            </ul>
            <ul>
                <li><?php echo "Xin chào ". $_SESSION["username"]; ?></li>
                <li><a href="index.php?page_layout=dangxuat">Đăng Xuất</a></li>
            </ul>
        </nav>

        <?php 
        if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
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
            case 'updatenguoidung':
                include "capnhat/updatenguoidung.php";
                break;
            case 'updatephim':
                include "capnhat/updatephim.php";
                break;
            case 'updatequocgia':
                include "capnhat/updatequocgia.php";
                break;
            case 'updatetheloai':
                include "capnhat/updatetheloai.php";
                break;
            case 'dangxuat':         
                break;
        }
        }
        
        
        ?>
    </header>
</body>

</html>