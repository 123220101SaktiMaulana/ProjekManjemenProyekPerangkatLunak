<?php
// Mengaktifkan session
session_start();

// Mengimpor koneksi database
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validasi input
    if (empty($username) || empty($password)) {
        $_SESSION['message'] = "Username dan password harus diisi.";
        $_SESSION['message_type'] = "error";
    } else {
        // Cek apakah username ada di database
        $sql = "SELECT id, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            // Verifikasi password
            if (password_verify($password, $row['password'])) {
                // Login berhasil
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $username;

                // Redirect ke dashboard
                header("Location: dashboard.php");
                exit;
            } else {
                // Password salah
                $_SESSION['message'] = "Password salah.";
                $_SESSION['message_type'] = "error";
            }
        } else {
            // Username tidak ditemukan
            $_SESSION['message'] = "Username salah.";
            $_SESSION['message_type'] = "error";
        }

        $stmt->close();
    }

    // Redirect kembali ke halaman login jika ada error
    header("Location: login.php");
    exit;
}

$conn->close();
?>
