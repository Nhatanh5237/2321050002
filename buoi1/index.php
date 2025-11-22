<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
        //1. In ra màn hình
        echo "Hello world! <br>";

        echo "Hi ";

        //2. Biến
        // Cú pháp: $ + tên biến = giá trị của biến
        $ten = "Nhat Anh";
        $tuoi = 20;

        echo $ten . " " . $tuoi . " tuổi <br>";

        //3. Hằng
        define("soPi", "3.14");
        echo soPi . "<br>";

        //4. Phân biệt ' ' và " "
        echo '$ten' . "<br>";
        echo "$ten" . "<br>";

        //5. Chuỗi
        #5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "A") . "<br>";
        #5.4 Thay thế ký tự trong chuỗi
        echo str_replace("Anh", "An", $ten) . "<br>";

        //6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        # + - * /
        # toán tử gán: += -= *= /= %=
        # so sánh: == != > < >= <= ===
        //echo $soThuNhat %= $soThuHai;

        //7. Câu điều kiện
        // if("Điều kiện"){
        //     logic
        // }
        // else{
        //     logic
        // }

        //VD: Kiểm tra tổng của số thứ nhất và số thứ hai
        // (nếu < 15 thì in ra nhỏ hơn 15)
        // (nếu = 15 thì in ra tổng = 15)
        // còn lại in ra lớn hơn 15

        $tong = $soThuNhat + $soThuHai;
        echo $tong;
        if ($tong < 15){
            echo "tổng nhỏ hơn 15";
        }
        else if ($tong == 15){
            echo "tổng bằng 15";
        }
        else {
            echo "tổng lớn hơn 15";
        }

        //8.switch case
        $color = "red";
        switch ($color){
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo "no color";
                break;
        }

        // //9. for
        // for ($i=0; $i < 100; $i++) {
        //     echo $i . "<br>";
        // }

        //10. Mảng
        $mang = ["Anh", "Nhật Anh", "Vũ Anh"];

        // Đếm phần tử
        echo count($mang);
        echo $mang[1] . "<br>";
        print_r($mang);
        $mang[0] = "Hai Anh";
        print_r($mang);
        $mang[0] = "Tam";
        print_r($mang);
        #xóa
        unset($mang[3]);
        print_r($mang);

    ?>
</body>
</html>