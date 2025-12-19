<?php
    include("../connect.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM phim WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);
    header("location: ../index.php?page_layout=phim");
?>