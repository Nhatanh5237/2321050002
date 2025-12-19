<head>
    <link rel="stylesheet" href="style.css">

    <?php if ($_GET['page_layout'] === 'chi_tiet_phim'): ?>
        <link rel="stylesheet" href="chi_tiet_phim.css">
    <?php endif; ?>

</head>
<?php
$id = $_GET["id"] ?? null; # kiểm tra tham số id
if (!$id) {
    echo '<p class="warning">Thiếu tham số id</p>';
    exit;
}

require 'connect.php';

$sql = "SELECT p.*, 
                qg.ten_quoc_gia, 
                nd.ho_ten AS ten_dao_dien 
            FROM phim p
            LEFT JOIN quoc_gia qg ON qg.id = p.quoc_gia_id # LEFT JOIN: Lấy phim ngay cả khi không có quốc gia / đạo diễn
            LEFT JOIN nguoi_dung nd ON nd.id = p.dao_dien_id
            WHERE p.id = $id";

$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    echo '<p class="warning">Không tìm thấy phim</p>';
    exit;
}

$detail = mysqli_fetch_assoc($result); # Lấy dữ liệu phim
?>

<div class="container23">
    <div class="poster">
        <img src="<?php echo htmlspecialchars($detail['poster']); ?>" alt="">
    </div>
    <div class="info">
        <h1><?php echo htmlspecialchars($detail["ten_phim"]); ?></h1>
        <p><b>Năm phát hành:</b> <?php echo htmlspecialchars($detail['nam_phat_hanh']); ?></p>
        <p><b>Đạo diễn:</b> <?php echo htmlspecialchars($detail['ten_dao_dien'] ?? 'N/A'); ?></p>
        <p><b>Quốc gia:</b> <?php echo htmlspecialchars($detail['ten_quoc_gia'] ?? 'N/A'); ?></p>
        <p><b>Số tập:</b> <?php echo htmlspecialchars($detail['so_tap']); ?></p>
        <p><b>Mô tả:</b></p>
        <p><?php echo htmlspecialchars($detail['mo_ta']); ?></p>
        <button class="button">Xem ngay</button>
        <iframe></iframe>

    </div>
</div>