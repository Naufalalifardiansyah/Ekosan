<?php
    $koneksi = mysqli_connect("localhost", "root", "", "kos");
    if(isset($_POST["deletedata"])){
        $id = $_POST["delete_id"];
        $query = mysqli_query($koneksi, "DELETE FROM data_kosan WHERE id = '$id'");
        if($query){
            echo "File berhasil dihapus";
        }
        else{
            echo "File gagal dihapus";
        }
    }
    header("location: responsive_table.php");
?>