<?php require_once '../server/connect.php';
require_once '../class/user_class.php';

if (isset($_POST['reg'])) {
    $uname = htmlentities($_POST['uname'], ENT_QUOTES, 'UTF-8');
    $upass = htmlentities($_POST['upass'], ENT_QUOTES, 'UTF-8');

    // Check user
    $class = new User_class();
    
    $login = $class->readUserName($uname);
    $result = mysqli_fetch_assoc($login);

    if ($result) {
        if (password_verify($upass, $result['u_pass'])) {
            $_SESSION['success'] = 'เข้าสู่ระบบสำเร็จ';
            $_SESSION['name'] = $result['u_name'];
            $_SESSION['email'] = $result['u_email'];
            $_SESSION['rank'] = $result['u_rank'];

            if ($result['u_rank'] == 'admin') {
                header('location: ../admin/index.php');
            } else {
                header('location: ../index.php');
            }
        } else {
            $_SESSION['error'] = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง';
            header('location: ../login.php');
        }
    } else {
        $_SESSION['error'] = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง';
        header('location: ../login.php');
    }
}