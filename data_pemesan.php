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
                        <a href="responsive_table.php">
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
                        <a class="active" href="data_pemesan.php">
                            <i class="fa fa-th"></i>
                            <span>Data Pemesanan Kamar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i></h3>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <h4>
                                    <i class="fa fa-angle-right"></i>Data Pemesanan
                                </h4>
                                <form action="simpan_data.php" method="POST" enctype="multipart/form-data">
                                <section id="unseen">
                                <div>
                                    <a class="logout" href="tdata_pemesanan.php">Edit Data Pemesan</a>    
                                </div>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Penyewa</th>
                                                <th>Nama Kosan</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Tenggang</th>
                                            </tr>
                                            
                                        </thead>
                                    </table>
                                </section>
                                </form>
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
        <script>
            $(document).ready(function(){
                $('.deletebtn').on('click', function(){
                    $('#deletemodal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();
                    console.log(data);
                    $('#delete_id').val(data[0]);
                });
            });
        </script>
    </body>
</html>
