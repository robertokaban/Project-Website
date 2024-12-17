<?php
// Include koneksi database jika diperlukan
// include('koneksi.php');

// Proses pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $program_studi = $_POST['program_studi'];
    $universitas = $_POST['universitas'];

    // Validasi data dan simpan ke database jika perlu
    // $query = "INSERT INTO pendaftaran_beasiswa (nama, alamat, email, no_telp, pendidikan_terakhir, program_studi, universitas) 
    //           VALUES ('$nama', '$alamat', '$email', '$no_telp', '$pendidikan_terakhir', '$program_studi', '$universitas')";

    // if (mysqli_query($koneksi, $query)) {
    //     echo "Pendaftaran berhasil!";
    // } else {
    //     echo "Error: " . mysqli_error($koneksi);
    // }

    // Simulasi pendaftaran berhasil
    echo "<div class='alert alert-success' role='alert'>Pendaftaran Beasiswa Anda telah berhasil diterima! Kami akan menghubungi Anda segera.</div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa D3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>Pendaftaran Beasiswa D3</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="no_telp" name="no_telp" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                            </div>
                            <div class="form-group">
                                <label for="program_studi">Program Studi yang Dipilih</label>
                                <input type="text" class="form-control" id="program_studi" name="program_studi" required>
                            </div>
                            <div class="form-group">
                                <label for="universitas">Nama Universitas</label>
                                <input type="text" class="form-control" id="universitas" name="universitas" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Daftar Beasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
