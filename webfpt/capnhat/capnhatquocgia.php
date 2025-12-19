<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap nhat quoc gia</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .warning {
            color: red;
            display: flex;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* form div {
            width: 65%;
            margin: auto;
        } */

        input {
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php
    include("./connect.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM `quoc_gia` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $quocGia = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <form action="index.php?page_layout=capnhatquocgia&id=<?php echo $quocGia["id"] ?>" method="POST">
            <div>
                <h1>Cập nhật quốc gia</h1>
            </div>
            <div>
                <input type="text" name="ten_quoc_gia" placeholder="Tên quốc gia"
                    value="<?php echo $quocGia['ten_quoc_gia']; ?>">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php
    if (!empty($_POST['ten_quoc_gia'])) {

        $tenQuocGia = $_POST['ten_quoc_gia'];

        $sql = "UPDATE quoc_gia
                    SET ten_quoc_gia = '$tenQuocGia'
                    WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.php?page_layout=quocgia');
        } else {

            echo 'Lỗi SQL: ' . mysqli_error($conn);
        }
    } else {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<p class= 'warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
        }
    }
    ?>

</body>

</html>