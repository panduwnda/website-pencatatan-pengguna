<?php
// Mengimpor koneksi database
require 'koneksi.php';

// Mengambil data pengguna dari database
$sql = "SELECT name, email, gender, address, phone, ip_address, browser FROM users ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Pengguna</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>Email</th><th>Jenis Kelamin</th><th>Alamat</th><th>Telepon</th><th>IP Address</th><th>Browser</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['ip_address'] . "</td>";
        echo "<td>" . $row['browser'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada pengguna yang terdaftar.";
}

$conn->close();
