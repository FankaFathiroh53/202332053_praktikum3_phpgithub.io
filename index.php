<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
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
        }
        h2 {
            color: #6a1b9a; /* Ungu untuk judul */
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"], input[type="submit"], button {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #9c27b0; /* Ungu untuk border */
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #6a1b9a; /* Ungu untuk border saat fokus */
            box-shadow: 0 0 5px rgba(106, 27, 154, 0.5);
            outline: none;
        }
        input[type="submit"], button {
            background-color: #6a1b9a; /* Ungu untuk tombol */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #4a148c; /* Lebih gelap saat hover */
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));

        // Cek apakah nama atau email kosong
        if (empty($name) || empty($email)) {
            // Redirect ke halaman error jika data tidak lengkap
            header("Location: eror.php");
            exit();
        }

        // Simpan informasi pengguna dalam session
        date_default_timezone_set("Asia/Jakarta");
        $loginTime = date("Y-m-d H:i:s"); // Waktu saat login
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['loginTime'] = $loginTime; // Simpan waktu login di session
        $_SESSION['loggedIn'] = true;

        // Redirect ke halaman yang menampilkan informasi pengguna
        header("Location: data.php");
        exit();
    }
    ?>

    <h2>Login Form</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Nama">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>