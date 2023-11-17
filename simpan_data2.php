<?php 
    $id = $_POST["id"];
    $namapenyewa = $_POST["namapenyewa"];
    $nkosan = $_POST["nkosan"];
    $tanggal = $_POST["tanggal"];
    $email = $_POST["email"];
    $no_wa = $_POST["no_wa"];
    $tenggang = $_POST["tenggang"];
    if($_POST){
        $koneksi = mysqli_connect("localhost", "root", "", "kos");
        $query = "INSERT INTO pemesanan(id, namapenyewa, nkosan, tanggal, email, no_wa, tenggang) VALUES('$id', '$namapenyewa', '$nkosan', '$tanggal', '$email', '$no_wa', '$tenggang')";
        mysqli_query($koneksi, $query);
    }
    else{
        echo "File gagal diupload";
    }
    header("location: pesan_kamar.php");
    
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