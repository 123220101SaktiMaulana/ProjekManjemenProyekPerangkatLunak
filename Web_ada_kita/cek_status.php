<?php
include 'koneksi.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Cek Status Pemesanan</h2>

        <!-- Form untuk mencari ID Pemesanan -->
        <form action="" method="GET" class="mb-4">
            <div class="input-group">
                <input type="number" name="id_pemesanan" class="form-control" placeholder="Masukkan ID Pemesanan" required>
                <button type="submit" class="btn btn-primary">Cek Status</button>
            </div>
        </form>

        <?php
        // Mengecek apakah form telah di-submit
        if (isset($_GET['id_pemesanan'])) {
            $id_pemesanan = $_GET['id_pemesanan'];

            // Query untuk mencari data berdasarkan ID
            $sql = "SELECT * FROM pemesanan_pengasuh WHERE id_pemesanan = $id_pemesanan";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<div class='card'>";
                echo "<div class='card-header'>Hasil Pencarian</div>";
                echo "<div class='card-body'>";
                echo "<p><strong>ID Pemesanan:</strong> " . $row['id_pemesanan'] . "</p>";
                echo "<p><strong>Nama Pasien:</strong> " . $row['nama_pasien'] . "</p>";
                echo "<p><strong>Tanggal Lahir:</strong> " . $row['tgl_lahir'] . "</p>";
                echo "<p><strong>Jenis Kelamin:</strong> " . $row['jenis_kelamin'] . "</p>";
                echo "<p><strong>Jenis Penyakit:</strong> " . $row['jenis_penyakit'] . "</p>";
                echo "<p><strong>Kondisi Pasien:</strong> " . $row['kondisi_pasien'] . "</p>";

                // Menampilkan status diterima
                if ($row['diterima'] == 1) {
                    echo "<p><strong>Status:</strong> <span class='badge bg-success'>Sudah Diterima</span></p>";
                } else {
                    echo "<p><strong>Status:</strong> <span class='badge bg-warning'>Belum Diterima</span></p>";
                }

                echo "</div>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger mt-4'>ID Pemesanan tidak ditemukan.</div>";
            }

            // Tutup koneksi
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>
