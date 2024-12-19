<?php
// Mengaktifkan session
session_start();

// Mengimpor file koneksi
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validasi input
    if (empty($email) || empty($username) || empty($password) || empty($confirm_password)) {
        $_SESSION['message'] = "Semua kolom harus diisi.";
        $_SESSION['message_type'] = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Email tidak valid.";
        $_SESSION['message_type'] = "error";
    } elseif ($password !== $confirm_password) {
        $_SESSION['message'] = "Password tidak cocok.";
        $_SESSION['message_type'] = "error";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Simpan ke database
        $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $email, $username, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Registrasi berhasil! silahkan login kembali";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error: " . $stmt->error;
            $_SESSION['message_type'] = "error";
        }

        $stmt->close();
    }

    // Redirect kembali ke halaman registrasi
    header("Location: registrasi.php");
    exit;
}

// Menutup koneksi
$conn->close();
?>
