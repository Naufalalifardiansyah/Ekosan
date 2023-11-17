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
        <title>Admin</title>
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
                <a href="berhasil_login.php" class="logo">
                    <b>Admin</b>
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
                        <h5 class="centered">Admin</h5>
                        <li class="mt">
                            <a href="berhasil_login.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="mt">
                            <a class="active" href="responsive_table.php">
                                <i class="fa fa-th"></i>
                                <span>Data Kosan</span>
                            </a>
                        </li>
                        <li class="mt">
                            <a href="pesan_kamar.php">
                                <i class="fa fa-th"></i>
                                <span>Info Pemesanan</span>
                            </a>
                        </li>
                        <li class="mt">
                            <a href="data_pemesan.php">
                                <i class="fa fa-th"></i>
                                <span>Data Pemesanan Kamar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="container">
                <section id="main-content">
                    <section class="wrapper">
                        <h3><i class="fa fa-angle-right"></i>Edit Data Pemesanan</h3>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="content-panel">
                                    <section id="unseen">
                                        <form action="simpan_data.php" method="POST" enctype="multipart/form-data">
                                            <table class="table table-bordered table-striped table-condensed">	
                                                <tr>
                                                    <td>Nama User</td>
                                                    <td><input type="text" name="namauser"></td>					
                                                </tr>	
                                                <tr>
                                                    <td>Tanggal Masuk</td>
                                                    <td><input type="date" name="tanggalmasuk"></td>					
                                                </tr>	
                                                <tr>
                                                    <td>Tanggal Tenggang</td>
                                                    <td><input type="date" name="tanggaltenggang"></td>					
                                                </tr>	
                                                <tr>
                                                    <td></td>
                                                    <td><input type="submit" value="Simpan"></td>					
                                                </tr>

                                            </table>
                                        </from>
                                    </section>
                                </div>
                            </div>			
                        </div>
                    </section>
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




        