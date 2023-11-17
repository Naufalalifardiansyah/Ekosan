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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        </script>
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
                            <a class="" href="responsive_table.php">
                                <i class="fa fa-th"></i>
                                <span>Data Kosan</span>
                            </a>
                        </li>
                        <li class="mt">
                            <a href="pesan_kamar.php">
                                <i class="fa fa-th"></i>
                                <span>Pemesanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="container">
            <section id="main-content">
                <section class="wrapper">
                    <!-- popup -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $koneksi = mysqli_connect("localhost", "root", "", "kos");
                        $id = $_GET["cek"];
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id = '$id'");
                        while($d = mysqli_fetch_array($query)){
                            $npenyewa = $d['namapenyewa'];
                            $date = $d['tenggang']; 
                    ?>
                    <h3><i class="fa fa-angle-right"></i>Masa Tenggang <?php echo $d["nkosan"]?></h3>
                    <h4><i class="fa fa-angle-right"></i>Nama Penyewa : <?php echo $npenyewa?></h4>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="unseen">
                                    <?php
                                        echo "
                                        <center><h1><div id='tgltgg'></div></h1></center>
                                        <a href='pesan_kamar.php' class='btn btn-sm btn-danger deletebtn'>Kembali</a>";
                                    ?>
                                    <div id="myModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><h2>Tanggal Tenggang <?php echo $d["nkosan"]?> : <?php echo $date?></h2></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        <script type="text/javascript">
        <?php 
           $data = strtotime($date);
           $getDate = date("F d, Y", $data); 
        ?>
        var tanggalTujuan = new Date("<?php echo "$getDate";?>").getTime();

        var hitungMundur = setInterval(function() {

            var sekarang = new Date().getTime()
            var selisih = tanggalTujuan - sekarang;

            var hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

            var jam  = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            
            var menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));

            var detik = Math.floor(selisih % (1000 * 60) / 1000);

            const tgltgg = document.getElementById('tgltgg');
            tgltgg.innerHTML = 'Waktu Pengisi Kosan Tinggal : ' + 
            hari + ' hari ' + jam + ' jam ' + menit + ' menit ' + detik + ' detik ';

            if( selisih < 0) {
                clearInterval(hitungMundur);
                tgltgg.innerHTML = 'Waktu Habis!';
            }
            
        }, 1000);
    </script>

    </body>
</html>




        