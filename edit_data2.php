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
                    </ul>
                </div>
            </aside>
            <section id="container">
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i>Edit Data</h3>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="unseen">
                                    <?php
                                        $koneksi = mysqli_connect("localhost", "root", "", "kos");
                                        $id = $_GET["edit"];
                                        $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id = '$id'");
                                            while($d = mysqli_fetch_array($query)){
                                    ?>
                                    <form action="update_data2.php" method="POST" enctype="multipart/form-data">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <td>ID</td>
                                                <td><input type="text" name="id" value="<?php echo $d["id"]?>"></td>					
                                            </tr>
                                            <tr>
                                                <td>Nama Penyewa</td>
                                                <td><input type="text" name="namapenyewa" value="<?php echo $d["namapenyewa"]?>"></td>					
                                            </tr>	
                                            <tr>
                                                <td>Nama Kosan</td>
                                                <td><input type="text" name="nkosan" value="<?php echo $d["nkosan"]?>"></td>					
                                            </tr>	
                                            <tr>
                                                <td>Tanggal</td>
                                                <td><input type="date" name="tanggal" value="<?php echo $d["tanggal"]?>"></td>					
                                            </tr>	
                                            <tr>
                                                <td>Email</td>
                                                <td><input type="text" name="email" value="<?php echo $d["email"]?>"></td>					
                                            </tr>	
                                            <tr>
                                                <td>NO Whatsapp</td>
                                                <td><input type="number" name="no_wa" value="<?php echo $d["no_wa"]?>"></td>					
                                            </tr>	
                                            <tr>
                                                <td>Tanggal Tenggang</td>
                                                <td><input type="date" name="tenggang" value="<?php echo $d["tenggang"]?>"></td>					
                                            </tr>		
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" value="Simpan"></td>					
                                            </tr>
                                        </table>
                                    </form>
                                    <?php
                                        }
                                    ?>
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




        