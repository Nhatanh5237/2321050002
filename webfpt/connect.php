<?php //connect đến database
$servername = "localhost";
$username = "root";
$password = "";
//$port = "3306"; (optional)
$database = "quan_ly_web_phim"; //thay đổi khi đổi database

// Create connection | Khởi tạo connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; //thông báo kết nối thành công
?>