<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
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
        <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css"/>
        <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">
        <script src="assets/js/chart-master/Chart.js"></script>
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
                            <a class="active" href="berhasil_login2.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="mt">
                            <a href="responsive_table2.php">
                                <i class="fa fa-th"></i>
                                <span>Data Kosan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="main-content">
            <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-9 main-chart">
                            <div class="row mt">
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN 41</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/kosan41/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Anwar</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/anwar/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Chalysta</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/chalysta/1.jpg" width="250">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Cipelang</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/cipelang/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Djemikin</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/djemikin/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN GC2</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/kosangc2/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Ibu Rus</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/iburus/rus.jpg" width="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Jerman</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/jerman/jerman.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Pasundan</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/bumipas/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Rindang Betah</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/rindang/1.jpg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN 65</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/65/65.jpeg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Tintin</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/tintin/1.jpeg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Ibu Cucu</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/ibucucu/1.jpeg" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN Ibu Teti</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/ibuteti/1.jpeg" width="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>INFO KOSAN 99</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="images/99/99.jpeg" width="250">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <footer class="site-footer">
                <div class="text-center">
                    2022 - WebsiteKosan
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
        </section>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery-1.8.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sparkline.js"></script>
        <script src="assets/js/common-scripts.js"></script>
        <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
        <script src="assets/js/sparkline-chart.js"></script>    
        <script src="assets/js/zabuto_calendar.js"></script>	
        <script type="application/javascript">
            $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });     
                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function () {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event", }
                    ]
                });
            });    
            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>
    </body>
</html>