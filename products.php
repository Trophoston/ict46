<?php require_once './server/connect.php';
require_once './class/pro_class.php';

$pro_class = new Pro_class();
$readPro = $pro_class->readPro();

if (!isset($_SESSION['name'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบก่อน';
    header('location: ./login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop Store</title>
    <link rel="stylesheet" href="./Framework/bootstrap-5.3.3-dist/bootstrap.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./Framework/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
    <?php include_once './component/navbar.php' ?>
    <?php include_once './component/error.php' ?>
    <?php include_once './component/success.php' ?>
    
    <div class="bg-[#FFE7CB] h-screen">
        <div class="text-center py-5">
            <h1 class="text-2xl font-bold">สินค้าทั้งหมด</h1>
        </div>
        <div class="container">
            <div class="row gap-3">
                <?php while ($row = mysqli_fetch_assoc($readPro)) { ?>
                <div class="card col-11 col-md-5 col-xl-3 p-0 rounded-md border-none shadow m-auto">
                    <img src="./uploads/<?php echo $row['p_img'] ?>" alt="" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h1 class="text-xl font-bold mb-2">ชื่อ: <?php echo $row['p_name'] ?></h1>
                        <p class="text-gray-500 mb-2">ยี่ห้อ: <?php echo $row['p_brand'] ?> - รุ่น: <?php echo $row['p_version'] ?></p>
                        <p class="text-gray-500 mb-2">สี: <?php echo $row['p_color'] ?></p>
                        <p class="text-gray-500 mb-3">ราคา: <?php echo $row['p_price'] ?></p>
                        <form action="./procress/buy.php" method="post">
                            <input type="hidden" name="pid" value="<?php echo $row['p_id'] ?>">
                            <button type="submit" class="btn btn-primary w-full">ซื้อสินค้า</button>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include_once './component/footer.php' ?>
</body>
<script src="./Framework/jquery.js"></script>
<script src="./Framework/bootstrap-5.3.3-dist/bootstrap.bundle.min.js"></script>
<script src="./Framework/sweetalert2/sweetalert2.min.js"></script>
</html>