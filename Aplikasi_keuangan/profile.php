<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
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
        <div class="judul">Profil Pribadi</div>
        <?php
            session_start();
            include("config.php");
            $str_query = "select * from msuser where username = '".$_SESSION['username']."'";
            $query = mysqli_query($connection, $str_query);
            $user = mysqli_fetch_array($query);
        ?>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>
                    <?php
                        echo $user['namaDepan'];
                    ?>
                </td>
                <td>Nama Tengah</td>
                <td>
                    <?php
                        echo $user['namaTengah'];
                    ?>
                </td>
                <td>Nama Belakang</td>
                <td>
                    <?php
                        echo $user['namaBelakang'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <?php
                        echo $user['tempatLahir'];
                    ?>
                </td>
                <td>Tanggal Lahir</td>
                <td>
                <?php
                        echo $user['tanggalLahir'];
                    ?>
                </td>
                <td>NIK</td>
                <td>
                <?php
                        echo $user['NIK'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td>
                <?php
                        echo $user['wargaNegara'];
                    ?>
                </td>
                <td>Email</td>
                <td>
                <?php
                        echo $user['email'];
                    ?>
                </td>
                <td>No HP</td>
                <td>
                <?php
                        echo $user['noHp'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <?php
                        echo $user['alamat'];
                    ?>
                </td>
                <td>Kode Pos</td>
                <td>
                <?php
                        echo $user['kodePos'];
                    ?>
                </td>
                <td>Foto Profil</td>
                <td>
                    <img src="<?php echo $user['fotoProfil']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="edit">
                        <a class="editButton" href="editProfile.php">Edit Profile</a>
                    </div>
                </td>
            </tr>
        </table>
        
    </div>
</body>
</html>