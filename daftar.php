<?php
// Koneksi ke Database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "db_pendaftaran"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Variabel untuk menyimpan pesan jika berhasil atau gagal
$message = "";

// Proses form ketika disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']);
    $jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
    
    // Query untuk menyimpan data
    $sql = "INSERT INTO pendaftaran (nama, alamat, email, no_telp, jurusan) 
            VALUES ('$nama', '$alamat', '$email', '$no_telp', '$jurusan')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        $message = "Pendaftaran berhasil! Kami akan menghubungi Anda segera.";
    } else {
        $message = "Terjadi kesalahan: " . $conn->error;
    }
}

// Tutup koneksi setelah selesai
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Mahasiswa Baru - Institut Teknologi dan Bisnis Indonesia</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Gaya Kustom untuk Form -->
    <style>
        body {
            padding-top: 60px; /* Memberi ruang agar konten tidak tertutup navbar */
        }
        .container {
            margin-top: 20px;
        }
        .form-container {
            margin-top: 30px;
        }
        .navbar {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Institut Teknologi dan Bisnis Indonesia</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li class="active"><a href="daftar.php">Daftar</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Formulir Pendaftaran -->
    <div class="container form-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Form Pendaftaran Mahasiswa Baru</h2>
                <!-- Menampilkan Pesan jika pendaftaran berhasil -->
                <?php if ($message): ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                <!-- Form Pendaftaran -->
                <form method="POST" action="daftar.php">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer (Opsional) -->
    <footer class="text-center" style="margin-top: 50px;">
        <p>&copy; 2024 Institut Teknologi dan Bisnis Indonesia</p>
    </footer>

    <!-- Script jQuery dan Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
