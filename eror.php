<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tidak Lengkap</title>
    <style>
        body {
            background-image: url('image/lab2.jpg'); /* Ganti dengan URL gambar */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
            border: 2px solid #6a1b9a; /* Border ungu */
        }
        h2 {
            color: #6a1b9a; /* Ungu untuk judul */
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 30px; /* Jarak antara teks dan tombol */
            font-size: 18px; /* Ukuran font lebih besar */
        }
        button {
            background-color: #6a1b9a; /* Ungu untuk tombol */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #4a148c; /* Lebih gelap saat hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Tidak Lengkap</h2>
    <p>Mohon isi nama dan alamat email Anda.</p>
    <a href="index.php" style="text-decoration: none;">
        <button>Back to Login</button>
    </a>
</div>

</body>
</html>