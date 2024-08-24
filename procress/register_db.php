<?php require_once '../server/connect.php';
require_once '../class/user_class.php';

if (isset($_POST['reg'])) {
    $uname = htmlentities( $_POST['uname'], ENT_QUOTES, 'UTF-8');
    $uemail = htmlentities( $_POST['uemail'], ENT_QUOTES, 'UTF-8');
    $upass = htmlentities( $_POST['upass'], ENT_QUOTES, 'UTF-8');
    $upasscon = htmlentities( $_POST['upasscon'], ENT_QUOTES, 'UTF-8');

    // using class
    $user = new User_class();

    // Check empty
    if (empty($uname) || empty($uemail) || empty($upass) || empty($upasscon)) {
        $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ";
        header("location: ../register.php");
        exit();
    }

    // Check password
    if ($upass !== $upasscon) {
        $_SESSION['error'] = "รหัสผ่านไม่ตรงกัน";
        header("location: ../register.php");
        exit();
    }

    // Check username
    $check_user = $user->readUserName($uname);
    $num_user = mysqli_num_rows($check_user);

    if ($num_user > 0) {
        $_SESSION['error'] = "ชื่อผู้ใช้นี้มีคนใช้แล้ว";
        header("location: ../register.php");
        exit();
    }

    // Check email
    $check_email = $user->readUserEmail($uemail);
    $num_email = mysqli_num_rows($check_email);

    if ($num_email > 0) {
        $_SESSION['error'] = "อีเมลนี้มีคนใช้แล้ว";
        header("location: ../register.php");
        exit();
    }

    // hash password
    $hash_pass = password_hash($upass, PASSWORD_DEFAULT);

    // Add user
    if (!isset($_SESSION['error'])) {
        $add_user = $user->addUser($uname, $uemail, $hash_pass, 'member');
        if ($add_user) {
            $_SESSION['success'] = "สมัครสมาชิกสำเร็จ";
            $_SESSION['name'] = $uname;
            $_SESSION['email'] = $uemail;
            $_SESSION['rank'] = 'member';
            header("location: ../products.php");
            exit();
        } else {
            $_SESSION['error'] = "สมัครสมาชิกไม่สำเร็จ";
            header("location: ../register.php");
            exit();
        }
    }
}