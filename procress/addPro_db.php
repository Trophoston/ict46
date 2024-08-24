<?php require_once '../server/connect.php';
require_once '../class/pro_class.php';

if (isset($_POST['addPro'])) {
    $pname = htmlentities($_POST['pname'], ENT_QUOTES, 'UTF-8');
    $pbrand = htmlentities($_POST['pbrand'], ENT_QUOTES, 'UTF-8');
    $pversion = htmlentities($_POST['pversion'], ENT_QUOTES, 'UTF-8');
    $pcolor = htmlentities($_POST['pcolor'], ENT_QUOTES, 'UTF-8');
    $pprice = htmlentities($_POST['pprice'], ENT_QUOTES, 'UTF-8');
    $pquan = htmlentities($_POST['pquan'], ENT_QUOTES, 'UTF-8');
    $pimg = $_FILES['pimg']['name'];

    // Check empty field
    if (empty($pname) || empty($pbrand) || empty($pversion) || empty($pcolor) || empty($pprice) || empty($pquan) || empty($pimg)) {
        $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ";
        header('location: ../admin/addpro.php');
        exit();
    }

    // Check file type
    $allowed = array('jpg', 'jpeg', 'png');
    $ext = pathinfo($pimg, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed)) {
        $_SESSION['error'] = "รูปภาพไม่ถูกต้อง";
        header('location: ../admin/addpro.php');
        exit();
    }

    $tmp = $_FILES['pimg']['tmp_name'];
    $path = "../uploads/" . $pimg;
    move_uploaded_file($tmp, $path);

    // rename
    $newname = date('YmdHis') . '_' . $pimg;
    rename($path, "../uploads/" . $newname);

    $pro = new Pro_class();
    $addPro = $pro->addPro($pname, $pbrand, $pversion, $pcolor, $pprice, $pquan, $newname);

    if ($addPro) {
        $_SESSION['success'] = "เพิ่มสินค้าสำเร็จ";
        header('location: ../admin/listpro.php');
        exit();
    } else {
        $_SESSION['error'] = "เพิ่มสินค้าไม่สำเร็จ";
        header('location: ../admin/addpro.php');
        exit();
    }
}