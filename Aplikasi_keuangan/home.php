<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="headline">Aplikasi Pengelola Keuangan</div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </header>       
    <div class="content">
        <?php 
        session_start();
        include("config.php");
        $str_query = "select * from msuser where username = '".$_SESSION['username']."'";
        $query = mysqli_query($connection, $str_query);
        $user = mysqli_fetch_array($query);

        echo "Halo ".$user['namaDepan']." ".$user['namaTengah']." ".$user['namaBelakang'].". Selamat Datang di Aplikasi Pengelola Keuangan" ?>
    </div>
</body>
</html>