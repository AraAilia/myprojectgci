<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Marketplace</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .dashboard {
      display: flex;
      gap: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 250px;
      text-align: center;
    }

    .card h3 {
      color: #333;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 24px;
      font-weight: bold;
      color: #4caf50;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <div class="card total-pesanan">
      <h3>Total Pesanan</h3>
      <p id="total-pesanan">0</p>
    </div>
  </div>

  <script>
    // Misalnya, kita dapat menarik data total pesanan dari API atau backend
    // Untuk contoh ini, kita set nilai total pesanan secara manual
    let totalPesanan = 152; // Contoh data, bisa diganti dengan API request

    // Menampilkan total pesanan pada elemen HTML
    document.getElementById('total-pesanan').textContent = totalPesanan;
  </script>
</body>
</html>
