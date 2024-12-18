<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group label {
      font-weight: 600;
    }

    .btn-primary {
      width: 100%;
      font-size: 16px;
    }

    hr {
      margin: 20px 0;
      border-color: #ddd;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h1>Unggah Item ke Template Situs</h1>
    <hr>
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="produk">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Produk" required>
      </div>
      <div class="form-group">
        <label for="jenis">Kategori</label>
        <select class="form-control" name="jenis" id="jenis" required>
          <option value="" disabled selected>--Kategori Produk--</option>
          <option>E-Commerce</option>
          <option>Blog</b></option>
          <option>Website Bisnis</option>
          <option>Website Pendidikan</option>
          <option>Admin</option>
          <option>Landing Page</option>
        </select>
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Produk" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Rp.</span>
          </div>
          <input type="number" class="form-control" name="harga" aria-label="Amount" required>
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="image">Unggah Gambar</label>
        <input type="file" class="form-control-file" name="image" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary mb-2">Unggah</button>
    </form>
  </div>                                                                                                                                                                                                          

  <!-- Bootstrap and Ionicons Scripts -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
