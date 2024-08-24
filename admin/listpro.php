<?php require_once '../server/connect.php';
require_once '../class/pro_class.php'; 

$pro_class = new Pro_class();
$readPro = $pro_class->readPro();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop Store</title>
    <link rel="stylesheet" href="../Framework/bootstrap-5.3.3-dist/bootstrap.css">
    <link rel="stylesheet" href="../Framework/adminlte/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../Framework/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="../Framework/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../dist/css/admin.css">
</head>
<body class="wrapper">
    <?php include_once './component/navbar.php'; ?>
    <?php include_once './component/sidebar.php'; ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <?php include_once './component/success.php'; ?>
                <?php include_once './component/error.php'; ?>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">จัดการสินค้า</h1>
                    </div>
                    <div class="col-sm-6">
                        <!-- Sweeetalert add product -->
                        <a href="./addpro.php" class="btn btn-primary float-sm-end">
                            <i class="fas fa-plus me-2"></i>
                            เพิ่มสินค้า
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <!-- Datatable & Responsive -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="p-2 table-responsive">
                                <table id="protabel" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ยี่ห้อ</th>
                                            <th>รุ่น</th>
                                            <th>สี</th>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            <th>รูปภาพ</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($readPro)) { ?>
                                            <tr>
                                                <td><?php echo $row['p_id']; ?></td>
                                                <td><?php echo $row['p_name']; ?></td>
                                                <td><?php echo $row['p_brand']; ?></td>
                                                <td><?php echo $row['p_version']; ?></td>
                                                <td><?php echo $row['p_color']; ?></td>
                                                <td><?php echo $row['p_price']; ?></td>
                                                <td><?php echo $row['p_quan']; ?></td>
                                                <td>
                                                    <img src="../uploads/<?php echo $row['p_img']; ?>" alt="" width="100">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="./editpro.php?id=<?php echo $row['p_id']; ?>" class="btn btn-warning">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="../procress/delPro_db.php" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
                                                            <button type="submit" class="btn btn-danger" name="delpro" id="delpro" onclick="return confirm('คุณต้องการลบสินค้านี้ใช่หรือไม่?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    
</body>
<script src="../Framework/jquery.js"></script>
<script src="../Framework/sweetalert2/sweetalert2.min.js"></script>
<script src="../Framework/DataTables/datatables.min.js"></script>
<script src="../Framework/adminlte/adminlte.min.js"></script>
<script src="../Framework/bootstrap-5.3.3-dist/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#protabel').DataTable();
    });


</script>
</html>