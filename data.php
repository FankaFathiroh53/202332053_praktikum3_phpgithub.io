<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lengkap</title>
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
        .welcome {
            background-color: rgba(234, 200, 255, 0.5); /* Ungu muda untuk latar belakang */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(106, 27, 154, 0.5); /* Shadow ungu muda */
            margin-top: 20px;
        }
        button {
            background-color: #6a1b9a; /* Ungu untuk tombol */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px; /* Jarak atas untuk tidak menumpuk */
        }
        button:hover {
            background-color: #4a148c; /* Lebih gelap saat hover */
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    session_start();

    if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
        // Jika belum login, redirect ke halaman login
        header("Location: index.php");
        exit();
    }

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $loginTime = $_SESSION['loginTime']; // Ambil waktu login dari session

    echo "<h2>Data Anda</h2>"; // Judul diubah menjadi "Data Anda"
    echo "<div class='welcome'>";
    echo "<h3>Selamat Datang, $name!</h3>";
    echo "<p>Email: $email</p>";
    echo "<p>Time: " . date("H:i:s", strtotime($loginTime)) . "</p>"; // Jam saat login
    echo "<p>Day: " . date("l", strtotime($loginTime)) . "</p>"; // Hari dalam bahasa Inggris
    echo "<p>Date: " . date("Y-m-d", strtotime($loginTime)) . "</p>";
    echo "</div>";
    ?>

    <form method="POST" action="">
        <button type="submit" name="logout">Back to Login</button>
    </form>

    <?php
    if (isset($_POST['logout'])) {
        // Reset session dan kembali ke form login
        session_destroy();
        header("Location: index.php");
        exit();
    }
    ?>
</div>

</body>
</html>