<?php
    $koneksi = mysqli_connect("localhost", "root", "", "kos");
    $id = $_POST["id"];
    $namakosan = $_POST["namakosan"];
    $namapemilik = $_POST["namapemilik"];
    $nomorwhatsapp = $_POST["nomorwhatsapp"];
    $fasilitas = $_POST["fasilitas"];
    $harga = $_POST["harga"];
    $alamat = $_POST["alamat"];
    if($_POST){
        $qry = mysqli_query($koneksi, "UPDATE data_kosan SET namakosan = '$namakosan', namapemilik = '$namapemilik', nomorwhatsapp = '$nomorwhatsapp', fasilitas = '$fasilitas', harga = '$harga', alamat = '$alamat' WHERE id = '$id'");
    }
    else{
        echo "File gagal diupdate";
    }
    header("location: responsive_table.php");
?>