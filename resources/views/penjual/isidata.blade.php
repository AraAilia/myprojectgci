<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISI Data Penjual</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color:rgb(224, 12, 12);
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f9f9f9;
      font-size: 1rem;
    }

    textarea {
      resize: vertical;
    }

    button {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      color: #fff;
      background-color:rgb(255, 17, 17);
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color:rgb(252, 15, 15);
    }

    .footer-bottom {
      text-align: center;
      background-color: #333;
      color: #fff;
      padding: 20px;
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <header>
    <h1>Data Diri Penjual</h1>
  </header>

  <div class="container">
    <h2>Isi Data Diri</h2>
    <form>
      <form id="isidata" action="{{ route('penjual.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
      </div>
      <div class="form-group">
        <label for="toko">Nama Toko:</label>
        <input id="toko" name="toko" placeholder="Masukkan Nama Toko Anda" required>
      </div>
      <div class="form-group">
        <label for="nomor_hp">No. HP:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" placeholder="Masukkan No HP Anda" required>
      </div>
      <div class="form-group">
        <label for="bank">Jenis Bank:</label>
        <select id="bank" name="bank" required>
          <option value="">Pilih Jenis Bank</option>
          <option value="bri">Bank BRI</option>
          <option value="mandiri">Bank Mandiri</option>
          <option value="bca">Bank BCA</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_rekening">No. Rekening:</label>
        <input type="text" id="no_rekening" name="no_rekening" placeholder="Masukkan No Rekening Anda" required>
      </div>
      <button type="submit">Simpan</button>
    </form>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2024 MartCode. All rights reserved.</p>
  </div>

</body>

</html>
