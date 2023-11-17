<?php 
    $id = $_POST["id"];
    $namakosan = $_POST["namakosan"];
    $namapemilik = $_POST["namapemilik"];
    $nomorwhatsapp = $_POST["nomorwhatsapp"];
    $fasilitas = $_POST["fasilitas"];
    $harga = $_POST["harga"];
    $alamat = $_POST["alamat"];
    if($_POST){
        $koneksi = mysqli_connect("localhost", "root", "", "kos");
        $query = "INSERT INTO data_kosan(id, namakosan, namapemilik, nomorwhatsapp, fasilitas, harga, alamat) VALUES('$id', '$namakosan', '$namapemilik', '$nomorwhatsapp', '$fasilitas', '$harga', '$alamat')";
        mysqli_query($koneksi, $query);
    }
    else{
        echo "File gagal diupload";
    }
    header("location: responsive_table.php");
    
    /*error_reporting(0);
    
    session_start();
    
    if (isset($_SESSION['namakosan'])) {
        header("Location: responsive_table.php");
    }
    
    if (isset($_POST['submit'])) {
        $username = $_POST['namakosan'];
        $namapemilik = $_POST['namapemilik'];
        $nomorwhatsapp = $_POST['nomorwhatsapp'];
        $fasilitas = $_POST['fasilitas'];
        $harga = $_POST['harga'];
        $alamat = $_POST['alamat'];
    
        $sql = "SELECT * FROM data_kosan WHERE data_kosan='$datakosan' ";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['data_kosan'] = $row['data_kosan'];
            header("Location: responsive_table.php");
        } 
    }*/
?>