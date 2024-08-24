<?php require_once './server/connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="./dist/css/login.css">
</head>
<body>

    <div class="box shadow-xl p-3 rounded-lg">
        <a href="./index.php" class="text-blue-500">< กลับหน้าหลัก</a>
        <div class="mt-3">
            <?php include_once './component/error.php'; ?>
        </div>
        <h3 class="text-center text-2xl mb-3">สมัครสมาชิก</h3>

        <form action="./procress/register_db.php" method="post">
            <!-- Name -->
            <div class="mb-5">
                <input type="text" placeholder="ชื่อผู้ใช้" name="uname" class="inp border-none outline-none focus:outline-none border-b-1 border-b-[#FFF0DF] px-2" id="" required>
            </div>

            <!-- Email -->
            <div class="mb-5">
                <input type="email" placeholder="อีเมล" name="uemail" class="inp border-none outline-none focus:outline-none border-b-1 border-b-[#FFF0DF] px-2" id="" required>
            </div>

            <!-- Password -->
            <div class="mb-5">
                <input type="password" placeholder="รหัสผ่าน" name="upass" class="inp border-none outline-none focus:outline-none border-b-1 border-b-[#FFF0DF] px-2 pass" id="" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-5">
                <input type="password" placeholder="ยืนยันรหัสผ่าน" name="upasscon"  class="inp border-none outline-none focus:outline-none border-b-1 border-b-bg-[#FFF0DF] px-2 pass" required>
            </div>
            
            <!-- Show Password -->
            <div class="mb-5">
                <input type="checkbox" name="" id="showpassword" onclick="showpass()">
                <label for="showpassword">แสดงรหัสผ่าน</label>
            </div>

            <!-- Button -->
            <div class="mb-5">
                <button type="submit" name="reg" class="bg-[#FFF0DF] hover:bg-[#FFE7CB] px-3 py-1 rounded-md m-auto block mb-3">สมัครสมาชิก</button>
                <a href="login.php" class="text-[#c79e6d] text-center m-auto block">เข้าสู่ระบบ</a>
            </div>
        </form>

    </div>


    
</body>
<script>
    function showpass() {
        let allpass = document.querySelectorAll(".pass");
        
        allpass.forEach((pass) => {
            if (pass.type === "password") {
                pass.type = "text"
            } else {
                pass.type = "password"
            }
        })
    }
</script>
</html>