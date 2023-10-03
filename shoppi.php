<?php
// Koneksi ke database MySQL
$host = 'localhost'; // Ganti dengan nama host MySQL Anda
$username = 'donat'; // Ganti dengan username MySQL Anda
$password = '11sija2'; // Ganti dengan password MySQL Anda
$database = 'kelompok8'; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel cart_items
$user_id = 1; // Ganti dengan ID pengguna yang sesuai
$query = "SELECT * FROM donat WHERE user_id = $user_id";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    // Menampilkan keranjang belanja
    echo "<h2>Keranjang Belanja Anda:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nama Produk</th><th>Harga</th><th>Jumlah</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Keranjang belanja Anda kosong.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
