<?php require_once '../server/connect.php'; ?>
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
    <link rel="stylesheet" href="../dist/css/admin.css">
</head>

<body class="wrapper">
    <?php include_once './component/navbar.php'; ?>
    <?php include_once './component/sidebar.php'; ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <?php include_once './component/error.php'; ?>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">เพิ่มสินค้า</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">เพิ่มสินค้า</h3>
                            </div>
                            <form action="../procress/addPro_db.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <div class="mb-2">
                                            <label for="emailinp">ชื่อสินค้า</label>
                                            <input id="emailinp" type="text" class="form-control" name="pname" required placeholder="ชื่อสินค้า">
                                        </div>

                                        <div class="mb-2">
                                            <label for="nameinmp">ยี่ห้อสินค้า</label>
                                            <input id="nameinmp" type="text" class="form-control" name="pbrand" required placeholder="ยี่ห้อสินค้า">
                                        </div>

                                        <div class="mb-2">
                                            <label for="brandinp">รุ่นของสินค้า</label>
                                            <input id="brandinp" type="text" class="form-control" name="pversion" required placeholder="รุ่นของสินค้า">
                                        </div>

                                        <div class="mb-2">
                                            <label for="colorinp">สีของสินค้า</label>
                                            <input id="colorinp" type="text" class="form-control" name="pcolor" required placeholder="สีของสินค้า">
                                            
                                        </div>

                                        <div class="mb-2 w-100">
                                            <label for="pfile">รูปภาพสินค้า</label> <br>
                                            <label for="pfile" class="dropfile">
                                                <input type="file" class="" id="pfile" name="pimg" required placeholder="รูปสินค้า">
                                            </label>
                                            
                                        </div>

                                        <div class="mb-2">
                                            <label for="priceinp">ราคาสินค้า</label>
                                            <input id="priceinp" type="number" class="form-control" name="pprice" required placeholder="ราคาสินค้า">
                                        </div>

                                        <div class="mb-2">
                                            <label for="quaninp">จำนวนสินค้า</label>
                                            <input id="quaninp" type="number" class="form-control" name="pquan" required placeholder="จำนวนสินค้า">
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="addPro" class="btn btn-primary">เพิ่มสินค้า</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="../Framework/jquery.js"></script>
<script src="../Framework/sweetalert2/sweetalert2.min.js"></script>
<script src="../Framework/adminlte/adminlte.min.js"></script>
<script src="../Framework/bootstrap-5.3.3-dist/bootstrap.bundle.min.js"></script>

</html>