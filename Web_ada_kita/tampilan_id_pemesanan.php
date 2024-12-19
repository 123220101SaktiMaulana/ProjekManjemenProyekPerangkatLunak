<?php
// Ambil ID dari parameter URL
$id_pemesanan = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            <h4>ID Pemesanan Anda</h4>
            <p>
                <strong><?php echo htmlspecialchars($id_pemesanan); ?></strong>
            </p>
            <p>Silakan salin ID ini untuk kebutuhan administratif.</p>
        </div>
        <div class="text-center">
            <a href="index.html" class="btn btn-primary">Kembali ke Menu</a>
        </div>
    </div>
</body>
</html>
