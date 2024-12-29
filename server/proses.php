<?php
// Mengimpor koneksi database
require 'koneksi.php';

// Mulai session untuk menyimpan data pengguna
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari form dan lakukan sanitasi
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $gender = htmlspecialchars(trim($_POST['gender'] ?? ''));
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $ip = $_SERVER['REMOTE_ADDR'];
    $browser = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);

    // Validasi sederhana di sisi server
    if (empty($name) || empty($email) || empty($gender) || empty($address) || empty($phone)) {
        die('Semua field wajib diisi!');
    }

    // Menyimpan data ke session
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_gender'] = $gender;
    $_SESSION['user_address'] = $address;
    $_SESSION['user_phone'] = $phone;
    $_SESSION['user_ip'] = $ip;
    $_SESSION['user_browser'] = $browser;

    // Simpan data ke database dengan query yang aman
    $sql = "INSERT INTO users (name, email, gender, address, phone, ip_address, browser) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('sssssss', $name, $email, $gender, $address, $phone, $ip, $browser);

        if ($stmt->execute()) {
            echo "Data berhasil disimpan!";
        } else {
            echo "Gagal menyimpan data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Gagal mempersiapkan statement: " . $conn->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Menampilkan data dari database
    $sql = "SELECT name, email, gender, address, phone, ip_address, browser FROM users ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = [];
        while ($row = $result->fetch_assoc()) {
            // Sanitasi output sebelum mengirim ke frontend
            $row = array_map('htmlspecialchars', $row);
            $data[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo json_encode([]);
    }
}

$conn->close();
