<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>E-Kosan</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo-rumah.png" alt="">
            <span>
              Kosan 65
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </header>
	<!-- end header section -->

	<!--slide-->
	
	<center>
	<div class="container">
	  <div class="col-md-8 col-md-offset-2">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
          </ol>
	
		  <!--  carousel -->
		<div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
				  </div>
                  <div class="detail_box">
					<img src="images/65/65.jpeg" height="500px" width="650px" alt="">
				  </div>
			  </div>
			</div>
	
			<div class="carousel-item">
				<div class="row">
				  <div class="col-md-6">
					<div class="detail_box">
						  <img src="images/65/2.jpeg" height="500px" width="650px" alt="">
					  </div>
					</div>
				  </div>
				</div>
	
				<div class="carousel-item">
					  <div class="row">
						<div class="col-md-6">
						  <div class="detail_box">
							  <img src="images/65/3.jpeg" height="500px" width="650px" alt="">
						  </div>
						</div>
					  </div>
				</div>
	
		  <!-- membuat panah next dan previous -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	  </div>
	</div>

</center>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <table border="1" cellpadding="5">
        <tr>
          <td bgcolor="orange">Harga </td>
          <td>+-750.000</td>
        </tr>
    
        <tr>
          <td bgcolor="orange">Fasilitas</td>
          <td>Kasur Bantal Lemari Wifi Air</td>
        </tr>

        <tr>
          <td bgcolor="orange">Ketersediaan Kamar</td>
          <td>1</td>
        </tr>
    
        <tr>
          <td bgcolor="orange">No Pemilik</td>
          <td> <input class="form-copy" id="text-copy" value="085722718880">
            <button class="btn btn-copy btn-circle" onclick="copyText()">
                <span class="fa fa-copy"></span> COPY
            </button>
            
            <script>function copyText() {  
              var copyText = document.getElementById("text-copy");  
              copyText.select();  
              document.execCommand("copy");
            }</script> </td>
        </tr>
    
        <tr>
          <td bgcolor="orange"> Alamat</td>
          <td>Gang cipelang Leutik no 5, jl cipelang leutik, kel. Selabatu, kec. Cikole, Kota sukabumi</td>
        </tr>
    
        
        <tr>
          <td bgcolor="orange"> Jarak</td>
          <td>+- 800M</td>
        </tr>
    
        
        <tr>
          <td bgcolor="orange"> Nama Pemilik</td>
          <td>Bapak Iwan</td>
        </tr>
        
        <tr>
          <td bgcolor="orange"> <a href="pemesanan.php"> Pesan Kamar</a></td>
        </tr>
        
      </table>
    
    </div>
    <div class="col-md-6">
      <div class="map_container">
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.78022951966!2d106.92549461468968!3d-6.916857895002251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684986839390b9%3A0xea4c4dfb8236a443!2sKosan%2065!5e0!3m2!1sid!2sid!4v1666279087661!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  <button onclick="goBack()">kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>


	 <!-- footer section -->
	 <section class="container-fluid footer_section">
		<p>
		  &copy; <span id="displayYear"></span> All Rights Reserved By
		  <a href="https://html.design/">Akagami(ali)</a>
		</p>
	  </section>
	  <!-- footer section -->
	
	  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
	  <script type="text/javascript" src="js/custom.js"></script>
	</body>
	
	</html>