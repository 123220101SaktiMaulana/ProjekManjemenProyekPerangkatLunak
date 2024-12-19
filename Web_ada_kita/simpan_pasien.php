<?php
// Include koneksi ke database
include 'koneksi.php';

// Ambil data dari form
$nama_pasien = $_POST['nama_pasien'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_penyakit = $_POST['jenis_penyakit'];
$kondisi_pasien = $_POST['kondisi_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO pemesanan_pengasuh (nama_pasien, tgl_lahir, jenis_penyakit, kondisi_pasien, jenis_kelamin)
        VALUES ('$nama_pasien', '$tgl_lahir', '$jenis_penyakit', '$kondisi_pasien', '$jenis_kelamin')";

// Eksekusi query dan cek apakah berhasil
if (mysqli_query($conn, $sql)) {
    // Ambil ID pemesanan terakhir yang baru saja disimpan
    $id_pemesanan = mysqli_insert_id($conn);
    
    // Redirect ke halaman baru dengan ID pemesanan sebagai parameter
    header("Location: tampilan_id_pemesanan.php?id=$id_pemesanan");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>