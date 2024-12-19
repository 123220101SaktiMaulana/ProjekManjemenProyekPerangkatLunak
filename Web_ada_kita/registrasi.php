<?php
// Mengaktifkan session
session_start();


// Ambil pesan dari session
$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
$message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : "";

// Hapus pesan dari session setelah ditampilkan
unset($_SESSION['message']);
unset($_SESSION['message_type']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f8f8;
    }

    .register-container {
      display: flex;
      width: 900px;
      max-width: 100%;
      height: 500px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
      background-color: #fff;
    }

    /* Bagian kiri */
    .register-left {
      flex: 1;
      background-color: rgba(54, 147, 97, 1);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      padding: 20px;
    }

    .register-left img {
      width: 60%;
      height: auto;
      animation: pulse 2s infinite;
    }

    /* Bagian kanan */
    .register-right {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .register-right h2 {
      font-weight: 600;
      margin-bottom: 20px;
      color: rgba(54, 147, 97, 1);
      text-align: center;
      font-size: 2rem;
    }

    .register-right .form-group {
      margin-bottom: 15px;
      margin-right: 27px;
    }

    .register-right input {
      width: 100%;
      padding: 12px;
      border: 2px solid rgba(54, 147, 97, 1);
      border-radius: 8px;
      font-size: 16px;
      outline: none;
      transition: border-color 0.3s ease;
    }

    .register-right input:focus {
      border-color: #3c8359;
      box-shadow: 0 0 8px rgba(54, 147, 97, 0.3);
    }

    .register-right .form-text {
      font-size: 14px;
      margin-top: 8px;
      text-align: center;
    }

    .register-right .form-text a {
      color: rgba(54, 147, 97, 1);
      text-decoration: none;
      font-weight: 600;
    }

    .register-right .form-text a:hover {
      text-decoration: underline;
    }

    .register-right button {
      width: 100%;
      padding: 12px;
      background-color: rgba(54, 147, 97, 1);
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 15px;
      font-weight: 600;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .register-right button:hover {
      background-color: #3c8359;
      transform: translateY(-2px);
    }

    .notification {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .success {
      background-color: #d4edda;
      color: #155724;
      border-color: #c3e6cb;
    }
    .error {
      background-color: #f8d7da;
      color: #721c24;
      border-color: #f5c6cb;
    }

    /* Animasi */
    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
  </style>
</head>
<body>
  <div class="register-container">
    <!-- Bagian kiri -->
    <div class="register-left">
      <img src="adakita.png" alt="AdaKITA Logo">
    </div>
    <!-- Bagian kanan -->
    <div class="register-right">
      <h2>REGISTER</h2>

      

      <form action="regist_cek.php" method="POST">
        <div class="form-group">
          <input type="email" name="email" placeholder="Masukkan Email" required>
        </div>
        <div class="form-group">
          <input type="text" name="username" placeholder="Masukkan Username" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Masukkan Password" required>
        </div>
        <div class="form-group">
          <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
        </div>

        <!-- Notifikasi -->
      <?php if (!empty($message)): ?>
        <div class="notification <?= strpos($message, 'berhasil') !== false ? 'success' : 'error'; ?>">
          <?= $message; ?>
        </div>
      <?php endif; ?>

        <button type="submit">REGISTRASI</button>
      </form>      
      <div class="form-text">
        Sudah punya akun? <a href="login.php">Login disini</a>
      </div>
    </div>
  </div>
</body>
</html>
