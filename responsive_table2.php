<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title>User</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">
        <link href="assets/css/table-responsive.css" rel="stylesheet">
    </head>
    <body>
        <section id="container">
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <a href="berhasil_login2.php" class="logo">
                    <b>User</b>
                </a>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li>
                            <a class="logout" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered">
                            <a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
                        </p>
                        <h5 class="centered">User</h5>
                        <li class="mt">
                            <a href="berhasil_login2.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="mt">
                            <a class="active" href="responsive_table2.php">
                                <i class="fa fa-th"></i>
                                <span>Data User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i>Data User</h3>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <h4><i class="fa fa-angle-right"></i>Data Kosan</h4>
                                <form action="simpan_data.php" method="POST" enctype="multipart/form-data">
                                <section id="unseen">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Kosan</th>
                                                <th>Nama Pemilik</th>
                                                <th>Nomor Whatsapp</th>
                                                <th>Fasilitas</th>
                                                <th>Harga</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $koneksi = mysqli_connect("localhost", "root", "", "kos");
                                                if(mysqli_connect_errno()){
                                                    echo "Koneksi database gagal : " . mysqli_connect_error();
                                                    exit;
                                                }
                                                $no = 1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM data_kosan");
                                                while($d = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $d["id"]?></td>
                                                <td><?php echo $d["namakosan"]?></td>
                                                <td><?php echo $d["namapemilik"]?></td>
                                                <td><?php echo $d["nomorwhatsapp"]?></td>
                                                <td><?php echo $d["fasilitas"]?></td>
                                                <td><?php echo $d["harga"]?></td>
                                                <td><?php echo $d["alamat"]?></td>
                                            </tr>
                                            <?php
                                                $no++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>			
                    </div>
                </section>
            </section>
        </section>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/js/common-scripts.js"></script>
    </body>
</html>
