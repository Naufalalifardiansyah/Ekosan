<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "sa";
$password = "abcd";
$dbname = "film";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menjalankan query untuk mengambil 3 baris data dari tabel "Movie" yang diurutkan berdasarkan field "price"
$sql = "SELECT * FROM Movie ORDER BY price LIMIT 3";
$result = $conn->query($sql);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    // Menampilkan hasil query
    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["name"]. "<br>";
        echo "Stock DVD: " . $row["stock_dvd"]. "<br>";
        echo "Harga: " . $row["price"]. "<br>";
        echo "--------------------<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Menutup koneksi ke database
$conn->close();
?>