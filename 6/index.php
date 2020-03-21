<!-- this source code header to definition from file to the make with name header.php -->
<?php include 'header.php'; ?>

<!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logoku.png" />
            </a>
        </div>
        <div style="float: right; margin-top: 40px" class="navbar-header">
            <a class="btn btn-primary" href="tambah/tambah.php">
                TAMBAH DATA
                <br>
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
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>Cashier</center>
                                        </th>
                                        <th>
                                            <center>Product</center>
                                        </th>
                                        <th>
                                            <center>Category</center>
                                        </th>
                                        <th>
                                            <center>Price</center>
                                        </th>
                                        <th>
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $sql = mysqli_query($con, "SELECT p.id as id, p.name as name, p.price as price, cy.name as categori, cr.name as cashier 
                                    		from product as p 
                                    		LEFT JOIN category as cy ON cy.id=p.id_categori
                                    		LEFT JOIN cashier as cr ON cr.id=p.id_cashier");
                                    $no = 1;
                                    foreach ($sql as $k) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $k['cashier']; ?></td>
                                            <td><?php echo $k['name']; ?></td>
                                            <td><?php echo $k['categori']; ?></td>
                                            <td><?php echo 'Rp. ' . number_format($k['price'], 0, ".", ".") ?></td>
                                            <td>
                                                <?php
                                                echo "<center><a href='edit/edit.php?id=$k[id]' class='btn btn-warning'><i class='icon-edit'></i>EDIT</a></center>";
                                                echo "<br>";
                                                echo "<center><a href='hapus/hapus_data.php?id=$k[id]' class='btn btn-danger'><i class='icon-edit'></i>DELETE</a></center>";
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>

        </div>
    </div>

    <!-- this source code header to definition from file to the make with name header.php -->
    <?php include 'footer.php'; ?>