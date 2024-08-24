<?php require_once '../server/connect.php';
require_once '../class/pro_class.php';

if (isset($_POST['pid'])) {
    $pid = htmlentities($_POST['pid'], ENT_QUOTES, 'UTF-8');

    $pro_class = new Pro_class();
    $buyPro = $pro_class->buyPro($_SESSION['email'], $_SESSION['name'], $pid);

    if($buyPro) {
        $_SESSION['success'] = 'ซื้อสินค้าสำเร็จ';
        header('location: ../products.php');
        exit();
    } else {
        $_SESSION['error'] = 'ไม่สามารถซื้อสินค้าได้';
        header('location: ../index.php');
        exit();
    }
}