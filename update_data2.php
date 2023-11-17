<?php
    $koneksi = mysqli_connect("localhost", "root", "", "kos");
    $id = $_POST["id"];
    $namapenyewa = $_POST["namapenyewa"];
    $nkosan = $_POST["nkosan"];
    $tanggal = $_POST["tanggal"];
    $email = $_POST["email"];
    $no_wa = $_POST["no_wa"];
    $tenggang = $_POST["tenggang"];
    if($_POST){
        $qry = mysqli_query($koneksi, "UPDATE pemesanan SET namapenyewa = '$namapenyewa', nkosan = '$nkosan', tanggal = '$tanggal', email = '$email', no_wa = '$no_wa', tenggang = '$tenggang' WHERE id = '$id'");
    }
    else{
        echo "File gagal diupdate";
    }
    header("location: pesan_kamar.php");
?>