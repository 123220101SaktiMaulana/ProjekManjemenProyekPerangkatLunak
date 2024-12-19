<?php
include 'koneksi.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Daftar Pasien</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Pemesanan</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Jenis Penyakit</th>
                    <th>Kondisi Pasien</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ambil data pasien dari database
                $sql = "SELECT * FROM pemesanan_pengasuh";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_pemesanan'] . "</td>";
                        echo "<td>" . $row['nama_pasien'] . "</td>";
                        echo "<td>" . $row['tgl_lahir'] . "</td>";
                        echo "<td>" . $row['jenis_kelamin'] . "</td>";
                        echo "<td>" . $row['jenis_penyakit'] . "</td>";
                        echo "<td>" . $row['kondisi_pasien'] . "</td>";

                        // Status pasien
                        if ($row['diterima'] == 1) {
                            echo "<td><span class='badge bg-success'>Diterima</span></td>";
                        } else {
                            echo "<td><span class='badge bg-warning'>Belum Diterima</span></td>";
                        }

                        // Tombol Terima
                        echo "<td>";
                        if ($row['diterima'] == 0) {
                            echo "<a href='terima_pasien.php?id=" . $row['id_pemesanan'] . "' class='btn btn-primary btn-sm'>Terima</a>";
                        } else {
                            echo "<button class='btn btn-secondary btn-sm' disabled>Sudah Diterima</button>";
                        }
                        echo "</td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Tidak ada data pasien</td></tr>";
                }

                // Tutup koneksi
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <div class="con align-items-center">
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Kembali ke Menu</a>
        </div>    
    </div>
</body>
</html>
