<?php
include 'koneksi.php'; // Koneksi ke database

// Ambil ID pasien dari URL
$id_pemesanan = $_GET['id'];

// Query untuk memperbarui status pasien
$sql = "UPDATE pemesanan_pengasuh SET diterima = 1 WHERE id_pemesanan = $id_pemesanan";

if (mysqli_query($conn, $sql)) {
    // Redirect kembali ke halaman daftar pasien
    header("Location: daftar_pasien.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
