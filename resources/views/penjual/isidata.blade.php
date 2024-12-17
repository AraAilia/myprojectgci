<!DOCTYPE html>
<html>
<head>
  <title>Isi Data Diri</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input, textarea, select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
<body>
  <div class="container">
    <h1>Isi Data Diri</h1>
    <form>
      <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="toko">Nama Toko:</label>
        <textarea id="alamat" name="alamat" required></textarea>
      </div>
      <div class="form-group">
        <label for="no_hp">No. HP:</label>
        <input type="no_hp" id="no_hp" name="no_hp" required>
      </div>
      <div class="form-group">
        <label for="jenis_bank">Bank Jenis:</label>
        <select id="jenis_bank" name="jenis_bank" required>
          <option value="">Pilih Jenis Bank</option>
          <option value="bri">Bank Bri</option>
          <option value="mandiri">Bank Mandiri</option>
          <option value="bca">Bank Bca</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_rek">No Rekening:</label>
        <input type="no_rek" id="email" name="no_rek" required>
      </div>
      <button type="submit">Simpan</button>
    </form>
  </div>
</body>
</html>