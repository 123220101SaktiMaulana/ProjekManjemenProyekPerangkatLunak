<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Data Pasien</h2>
        <form action="simpan_pasien.php" method="POST">
            <!-- Input Nama Pasien -->
            <div class="mb-3">
                <label for="namaPasien" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="namaPasien" name="nama_pasien"
                    placeholder="Masukkan nama pasien" required>
            </div>

            <!-- Input Tanggal Lahir -->
            <div class="mb-3">
                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tglLahir" name="tgl_lahir" required>
            </div>

            <!-- Input Jenis Penyakit -->
            <div class="mb-3">
                <label for="jenisPenyakit" class="form-label">Jenis Penyakit</label>
                <input type="text" class="form-control" id="jenisPenyakit" name="jenis_penyakit"
                    placeholder="Masukkan jenis penyakit" required>
            </div>

            <!-- Input Kondisi Pasien -->
            <div class="mb-3">
                <label for="kondisiPasien" class="form-label">Kondisi Pasien</label>
                <textarea class="form-control" id="kondisiPasien" name="kondisi_pasien" rows="3"
                    placeholder="Masukkan kondisi pasien" required></textarea>
            </div>

            <!-- Input Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakiLaki"
                            value="Laki-laki" required>
                        <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                            value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <div class="row align-items-center">
            <div class="col">
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">Kembali ke Menu</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <a href="cek_status.php" class="btn btn-primary">Lihat status pemesanan</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>