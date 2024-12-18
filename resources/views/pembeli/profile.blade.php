<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Profil Pembeli</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Mengatur font global dan background estetik */
        body {
            font-family: 'Roboto', sans-serif; 
            background: linear-gradient(to right, #a7c5bd, #d0e9e3); /* Gradien biru pastel yang lembut */
            margin: 0;
            padding: 0;
            color: #333;
        }

        .background-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang putih transparan */
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); /* Efek bayangan lembut */
            backdrop-filter: blur(12px); /* Efek blur pada background */
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #3e4c59;
            font-size: 2rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            display: block;
            margin-bottom: 8px;
            color: #3e4c59;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #e0e0e0; /* Border abu-abu lembut */
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus {
            border-color: #56b4b9; /* Warna biru pastel terang */
            box-shadow: 0 0 8px rgba(86, 180, 185, 0.5);
            outline: none;
        }

        textarea {
            resize: vertical;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 48%;
        }

        .btn-submit {
            background-color: #56b4b9;
            color: white;
        }

        .btn-submit:hover {
            background-color: #46999b;
        }

        .btn-reset {
            background-color: #f1c40f;
            color: white;
        }

        .btn-reset:hover {
            background-color: #e0b100;
        }

        /* Responsif untuk perangkat mobile */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <div class="background-container">
        <div class="container">
            <h2>Profil Pembeli</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone" placeholder="Masukkan Nomor Telepon" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea id="address" name="address" placeholder="Masukkan Alamat" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="profile_pic">Foto Profil</label>
                    <input type="file" id="profile_pic" name="profile_pic" accept="image/*">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Simpan</button>
                    <button type="reset" class="btn-reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
