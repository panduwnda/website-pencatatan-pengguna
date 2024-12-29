<?php
class Mahasiswa
{
    private $conn;

    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    // Method untuk menambahkan data mahasiswa
    public function tambahMahasiswa($nama, $email, $jenisKelamin)
    {
        $sql = "INSERT INTO users (name, email, gender) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param('sss', $nama, $email, $jenisKelamin);
            return $stmt->execute();
        }
        return false;
    }

    // Method untuk mendapatkan semua data mahasiswa
    public function dapatkanMahasiswa()
    {
        $sql = "SELECT id, name, email, gender FROM users ORDER BY created_at DESC";
        $result = $this->conn->query($sql);

        $data = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}

// Contoh penggunaan class Mahasiswa
// require 'koneksi.php';
// $mahasiswa = new Mahasiswa($conn);
// $mahasiswa->tambahMahasiswa('John Doe', 'john@example.com', 'Laki-laki');
// print_r($mahasiswa->dapatkanMahasiswa());
