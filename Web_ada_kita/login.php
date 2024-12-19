<?php
// Mengaktifkan session
session_start();
// Ambil pesan dari session
$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
$message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : "";

// Hapus pesan setelah ditampilkan
unset($_SESSION['message']);
unset($_SESSION['message_type']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
      font-family: 'Poppins', sans-serif;
    }

    .login-container {
      display: flex;
      width: 800px;
      max-width: 100%;
      height: 450px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1s ease-in-out;
    }

    /* Bagian kiri (gambar/logo) */
    .login-left {
      flex: 1;
      background-color: rgba(54, 147, 97, 1);
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .login-left img {
      width: 70%;
      height: auto;
      animation: pulse 2s infinite;
    }

    /* Bagian kanan (form login) */
    .login-right {
      flex: 1;
      background-color: #fff;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .login-right h2 {
      font-weight: 600;
      margin-bottom: 20px;
      color: rgba(54, 147, 97, 1);
      text-align: center;
      font-size: 2rem;
    }

    .login-right .form-control {
      border: 2px solid rgba(54, 147, 97, 1);
      border-radius: 8px;
      transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .login-right .form-control:focus {
      border-color: rgba(54, 147, 97, 1);
      box-shadow: 0 0 8px rgba(54, 147, 97, 0.5);
    }

    .login-right button {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: rgba(54, 147, 97, 1);
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .login-right button:hover {
      background-color: #3c8359;
      transform: translateY(-2px);
    }

    .login-right .register {
      text-align: center;
      margin-top: 12px;
      font-size: 14px;
    }

    .login-right .register a {
      color: #4CAF50;
      text-decoration: none;
      font-weight: 600;
    }

    .login-right .register a:hover {
      text-decoration: underline;
    }

    .notification {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .error {
      background-color: #f8d7da;
      color: #721c24;
      border-color: #f5c6cb;
    }
    .success {
      background-color: #d4edda;
      color: #155724;
      border-color: #c3e6cb;
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
  <div class="login-container">
    <!-- Bagian kiri -->
    <div class="login-left">
      <img src="adakita.png" alt="AdaKITA Logo">
    </div>
    <!-- Bagian kanan -->
    <div class="login-right">
      <h2>LOGIN</h2>

      
      
      
      <form action="login_cek.php" method="POST" onsubmit="return validateForm()">
        <div class="mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
        </div>
        <button class="mb-3" type="submit" style="font-weight: 500;">LOGIN</button>
      </form>
      <?php if (!empty($message)) { ?>
          <div class="notification <?= htmlspecialchars($message_type); ?>">
              <?= htmlspecialchars($message); ?>
          </div>
      <?php } ?>
      <div class="register">
        belum punya akun? <a href="registrasi.php">Register disini</a>
      </div>

    </div>
  </div>
  
  <script>
    function validateForm() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (!username || !password) {
        alert("Username dan Password harus diisi!");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>
