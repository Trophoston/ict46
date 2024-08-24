<?php require_once '../server/connect.php';
require_once '../class/pro_class.php';

if (isset($_POST['delpro'])) {
    $pid = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');

    $pro_class = new Pro_class();
    $readPro = $pro_class->readProById($pid);
    $row = mysqli_fetch_assoc($readPro);

    $deletePro = $pro_class->deletePro($pid);

    if ($deletePro) {
        unlink('../uploads/' . $row['p_img']);
        $_SESSION['success'] = 'ลบสินค้าสำเร็จ';
        header('location: ../admin/listpro.php');
        exit;
    } else {
        $_SESSION['error'] = 'ลบสินค้าไม่สำเร็จ';
        header('location: ../admin/listpro.php');
        exit;
    }
}