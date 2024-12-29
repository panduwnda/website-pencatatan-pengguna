<?php
// Mengimpor koneksi database
require 'server/koneksi.php';

// Mengambil data pengguna dari database
$sql = "SELECT name, email, gender, address, phone, ip_address, browser FROM users ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <!-- Header -->
    <header class="row justify-content-between py-5">
      <div class="col-12 col-md-6">
        <h1 class="display-4 text-primary font-weight-bold">Website Pencatatan Pengguna</h1>
        <p class="lead text-muted">Solusi cerdas untuk mencatat dan mengelola data pengguna dengan mudah.</p>
      </div>
      <div class="col-12 col-md-6 text-end">
        <img src="assets/logo.png" alt="Logo" class="img-fluid logo" style="max-height: 80px;">
      </div>
    </header>

    <!-- Hero Section -->
    <section class="hero text-center py-5 mb-4">
      <h2 class="display-5 text-white">Daftar Pengguna Terdaftar</h2>
    </section>

    <!-- Sidebar and Content -->
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-12 col-md-3 bg-light p-4 rounded-3 shadow">
        <h3 class="text-primary">Navigasi</h3>
        <ul class="list-unstyled">
          <li><a href="index.html" class="btn btn-block btn-outline-primary mb-3">Halaman Utama</a></li>
          <li><a href="signup.html" class="btn btn-block btn-outline-secondary mb-3">Pendaftaran</a></li>
          <li><a href="users.php" class="btn btn-block btn-outline-info mb-3">Daftar Pengguna</a></li>
        </ul>
      </nav>

      <!-- Tabel Pengguna -->
      <main class="col-12 col-md-9">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>IP Address</th>
              <th>Browser</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              // Output data dari setiap baris
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['gender']}</td>
                                        <td>{$row['address']}</td>
                                        <td>{$row['phone']}</td>
                                        <td>{$row['ip_address']}</td>
                                        <td>{$row['browser']}</td>
                                    </tr>";
              }
            } else {
              echo "<tr><td colspan='7'>Tidak ada pengguna yang terdaftar.</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </main>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4">
      <p>&copy; 2024 Website Pencatatan Pengguna | All Rights Reserved</p>
    </footer>
  </div>

  <!-- Bootstrap JS and Dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>