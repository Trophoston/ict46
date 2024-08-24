<?php require_once '../server/connect.php';
require_once '../class/pro_class.php';

if (isset($_POST['editpro'])) {
    $pid = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');
    $pname = htmlspecialchars($_POST['pname'], ENT_QUOTES, 'UTF-8');
    $pbrand = htmlspecialchars($_POST['pbrand'], ENT_QUOTES, 'UTF-8');
    $pversion = htmlspecialchars($_POST['pversion'], ENT_QUOTES, 'UTF-8');
    $pcolor = htmlspecialchars($_POST['pcolor'], ENT_QUOTES, 'UTF-8');
    $pprice = htmlspecialchars($_POST['pprice'], ENT_QUOTES, 'UTF-8');
    $pquan = htmlspecialchars($_POST['pquan'], ENT_QUOTES, 'UTF-8');
    $pimg = $_FILES['pimg'];

    // Check empty
    if ($pname == '' || $pbrand == '' || $pversion == '' || $pcolor == '' || $pprice == '' || $pquan == '') {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header('location: ../admin/editpro.php?id=' . $pid);
        exit;
    }

    $pro_class = new Pro_class();
    $readPro = $pro_class->readProById($pid);
    $row = mysqli_fetch_assoc($readPro);

    if ($pimg['name'] == '') {
        $pimgname = $row['p_img'];
    } else {
        // Check file type
        $fileType = pathinfo($pimg['name'], PATHINFO_EXTENSION);
        if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
            $_SESSION['error'] = 'รูปภาพไม่ถูกต้อง';
            header('location: ../admin/editpro.php?id=' . $pid);
            exit;
        }

        $pimgname = $pimg['name'];
        $newName = date('YmdHis') . '_' . $pimgname;
        move_uploaded_file($pimg['tmp_name'], '../uploads/' . $pimgname);
        rename('../uploads/' . $pimgname, '../uploads/' . $newName);
        $pimgname = $newName;
        unlink('../uploads/' . $row['p_img']);
    }

    $updatePro = $pro_class->updatePro($pid, $pname, $pbrand, $pversion, $pcolor, $pprice, $pquan, $pimgname);

    if ($updatePro) {
        $_SESSION['success'] = 'แก้ไขสินค้าสำเร็จ';
        header('location: ../admin/listpro.php');
        exit;
    } else {
        $_SESSION['error'] = 'แก้ไขสินค้าไม่สำเร็จ';
        header('location: ../admin/editpro.php?id=' . $pid);
        exit;
    }

}