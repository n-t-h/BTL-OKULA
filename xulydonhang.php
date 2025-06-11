<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Nhận dữ liệu từ form
    $name     = $_POST['name'];
    $address  = $_POST['address'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $note     = $_POST['note'];
    $payment  = $_POST['payment'];

    // Ghi đơn hàng
    $order = "Họ tên: $name\nĐịa chỉ: $address\nĐiện thoại: $phone\nEmail: $email\nGhi chú: $note\nThanh toán: $payment\nNgày: " . date("d-m-Y H:i:s") . "\n-------------------------\n";
    file_put_contents("donhang.txt", $order, FILE_APPEND);

    // Chuyển hướng
    echo "<script>alert('Đặt hàng thành công!'); window.location.href='index.html';</script>";
} else {
    // Trả về lỗi 405 nếu không phải POST
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
