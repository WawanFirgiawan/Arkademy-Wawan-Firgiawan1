<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>

    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="../assets/img/logoku.png" />
                </a>
            </div>
            <div style="float: right; margin-top: 40px" class="navbar-header">
                <a class="btn btn-primary" href="../index.php">
                    BACK
                </a>
            </div>
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                        <li class="dropdown">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        TAMBAH DATA
                    </div>
                    <div class="panel-body">
                        <form method="post" action="action_tambah.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CASHIER</label>
                                <select name="cashier" id="saldo" class="form-control">
                                    <option value="">Pilih Cashier</option>

                                    <?php
                                    include '../koneksi.php';
                                    $sql = mysqli_query($con, "SELECT * from cashier");
                                    foreach ($sql as $r) { ?>
                                        <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NAME</label>
                                <input type="text" class="form-control" name="nama" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CATEGORI</label>
                                <select name="categori" id="saldo" class="form-control">
                                    <option value="">Pilih Category</option>

                                    <?php
                                    include '../koneksi.php';
                                    $sql = mysqli_query($con, "SELECT * from category");

                                    foreach ($sql as $r) { ?>
                                        <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">PRICE</label>
                                <input type="text" class="form-control" name="price" />
                            </div>
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/js/jquery-1.11.1.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="../assets/js/bootstrap.js"></script>
</body>

</html>