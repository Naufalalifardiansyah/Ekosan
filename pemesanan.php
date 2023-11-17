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
              Pemesanan Kosan
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </header>
	<!-- end header section -->

	<!--pemesanan-->
  <center>
    <form action="" method="post">
    <table>
      <tr>
        <td width="130px">Nama Penyewa</td>
        <td><input type="text" name="nama_penyewa"></td>
      </tr> 
      <tr>
        <td width="130px">Nama Kosan</td>
        <td><select type="text" name="nama_kosan" class="form-control">
          <option>Pilih Kosan</option>
          <option>Kosan 41</option>
          <option>Kosan Anwar</option>
          <option>Kosan Chalysta</option>
          <option>Kosan Cipelang</option>
          <option>Kosan Djemikin</option>
          <option>Kosan GC2</option>
          <option>Kosan Ibu Rus</option>
          <option>Kosan Jerman</option>
          <option>Kosan Pasundan</option>
          <option>Kosan Rindang Betah</option>
          <option>Kosan 65</option>
          <option>Kosan Tintin</option>
          <option>Kosan Cucu</option>
          <option>Kosan Teti</option>
          <option>Kosan 99</option>
        </select></td>
      </tr>
      <tr>
        <td width="130px">Tanggal Masuk</td>
        <td><input type="date" name="tanggal"></td>
      </tr>
      <tr>
        <td width="130px">Email</td>
        <td><input type="text" name="email"></td>
      </tr> 
      <tr>
        <td width="130px">Masukan No Whatsapp</td>
        <td><input type="number" name="no_wa"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
      </tr>
    </table>
    </form>
  </center>
  
  <?php
    include "config.php";
    
    if(isset($_POST['proses'])) {
      mysqli_query($conn, "insert into pemesanan set
      namapenyewa = '$_POST[nama_penyewa]',
      nkosan = '$_POST[nama_kosan]',
      tanggal = '$_POST[tanggal]',
      email = '$_POST[email]',
      no_wa = '$_POST[no_wa]'");

      echo "<script>alert('Mohon untuk menunggu hingga pihak kosan menghubungi mu!')</script>";
    }
  ?>
      
      <p class="login-register-text"><a href="kosan.php">Logout</a></p>


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