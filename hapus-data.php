<?php
    include "config.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from barang where kode_barang='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='responsive_table.php'>";

    }
    ?>