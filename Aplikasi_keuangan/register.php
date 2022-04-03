<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <h1>Register <br></h1>
    <form action="register.php" method="post" enctype="multipart/form-data">
        
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>
                    <input type="text" name="namaDepan">
                </td>
                <td>Nama Tengah</td>
                <td>
                    <input type="text" name="namaTengah">
                </td>
                <td>Nama Belakang</td>
                <td>
                    <input type="text" name="namaBelakang">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <input type="text" name="tempatLahir">
                </td>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tanggalLahir">
                </td>
                <td>NIK</td>
                <td>
                    <input type="text" name="NIK">
                </td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td>
                    <input type="text" name="wargaNegara">
                </td>
                <td>Email</td>
                <td>
                    <input type="email" name="email">
                </td>
                <td>No HP</td>
                <td>
                    <input type="text" name="noHp">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat">
                </td>
                <td>Kode Pos</td>
                <td>
                    <input type="text" name="kodePos">
                </td>
                <td>Foto Profil</td>
                <td>
                    <input type="file" name="fotoProfil">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username">
                </td>
                <td>Password 1</td>
                <td>
                    <input type="password" name="password1">
                </td>
                <td>Password 2</td>
                <td>
                    <input type="password" name="password2">
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Register" name="submit">
                </td>
                <td>
                    <a href="index.php">Kembali</a>
                </td>
            </tr>
        </table>        
    </form>
    <?php
        session_start();
        include("config.php");
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        function endsWith($string, $endString){
            $len = strlen($endString);
            if ($len == 0) {
                return true;
            }
            return (substr($string, -$len) === $endString);
        }
    
        function startsWith ($string, $startString) {
            $len = strlen($startString);
            return (substr($string, 0, $len) === $startString);
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        $flag=true;
        if (empty($_POST["namaDepan"])) {
            echo "namaDepan is required";
            $flag=false;
        } else {
            $namaDepan = test_input($_POST["namaDepan"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$namaDepan)) {
                echo "Invalid namaDepan format";
                $flag=false;
            }
        }
        if (empty($_POST["namaTengah"])) {
            echo "namaTengah is required";
            $flag=false;
        } else {
            $namaTengah = test_input($_POST["namaTengah"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$namaDepan)) {
                echo "Invalid namaTengah format";
                $flag=false;
            }
        }
        if (empty($_POST["namaBelakang"])) {
            echo "namaBelakang is required";
            $flag=false;
        } else {
            $namaBelakang = test_input($_POST["namaBelakang"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$namaBelakang)) {
                echo "Invalid namaBelakang format";
                $flag=false;
            }
        }
        if (empty($_POST["tempatLahir"])) {
            echo "tempatLahir is required";
            $flag=false;
        } else {
            $tempatLahir = test_input($_POST["tempatLahir"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$tempatLahir)) {
                echo "Invalid tempatLahir format";
                $flag=false;
            }
        }
        if (empty($_POST["tanggalLahir"])) {
            echo "tanggalLahir is required";
            $flag=false;
        }
        if (empty($_POST["NIK"])) {
            echo "NIK is required";
            $flag=false;
        } else {
            $NIK = test_input($_POST["NIK"]);
            if (!preg_match('~[0-9]+~',$NIK)) {
                echo "Invalid NIK format";
                $flag=false;
            }
        }
        if (empty($_POST["wargaNegara"])) {
            echo "wargaNegara is required";
            $flag=false;
        } else {
            $wargaNegara = test_input($_POST["wargaNegara"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$wargaNegara)) {
                echo "Invalid wargaNegara format";
                $flag=false;
            }
        }
        if (empty($_POST["email"])) {   
            echo "email is required";
            $flag=false;
        }else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format";
                $flag=false;
            }
        }
        if (empty($_POST["noHp"])) {
            echo "noHp is required";
            $flag=false;
        } else {
            $noHp = test_input($_POST["noHp"]);
            if (strlen($noHp) < 5 || !preg_match('~[0-9]+~',$noHp) || !startsWith($noHp, "08")) {
                echo "Invalid noHp format";
                $flag=false;
            }
        }
        if (empty($_POST["alamat"])) {
            echo "alamat is required";
            $flag=false;
        } else {
            $alamat = test_input($_POST["alamat"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$alamat)) {
                echo "Invalid alamat format";
                $flag=false;
            }
        }
        if (empty($_POST["kodePos"])) {
            echo "kodePos is required";
            $flag=false;
        } else {
            $kodePos = test_input($_POST["kodePos"]);
            if (strlen($kodePos) < 5 || !preg_match('~[0-9]+~',$kodePos)) {
                echo "Invalid kodePos format";
                $flag=false;
            }
        }
        
        $fotoProfil = $_FILES["fotoProfil"];
        if (!$fotoProfil["tmp_name"]) {
            echo "fotoProfil is required";
            $flag=false;
        }

        if (empty($_POST["username"])) {
            echo "username is required";
            $flag=false;
        } else {
            $str_query = "select * from msuser where username = '".$_POST['username']."'";
            $query = mysqli_query($connection, $str_query);
            $user = mysqli_fetch_array($query);

            if($_POST['username'] == $user['username']){
                echo $_POST['username'];
                echo "Username is alredy used. Please try another one. ";
                $flag=false;
            }else{
                $username = test_input($_POST["username"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                    echo "Invalid username format";
                    $flag=false;
                }
            }   
        }

        if (empty($_POST["password1"]) || empty($_POST["password2"])) {
            echo "password 1 and password 2 are required";
            $flag=false;
        } else {
            $password1 = test_input($_POST["password1"]);
            $password2 = test_input($_POST["password2"]);
            if ($password1 != $password2) {
                echo "Password 1 and 2 do not match";
                $flag=false;
            }            

        }
        
        if($flag){
            
            if(isset($_POST['submit'])){
                $_SESSION['namaDepan'] = $_POST['namaDepan'];
                $_SESSION['namaTengah'] = $_POST['namaTengah'];
                $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
                $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
                $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
                $_SESSION['NIK'] = $_POST['NIK'];
                $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['noHp'] = $_POST['noHp'];
                $_SESSION['alamat'] = $_POST['alamat'];
                $_SESSION['kodePos'] = $_POST['kodePos'];   
                $_SESSION['fotoProfil'] = $fotoProfil;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password1'] = $_POST['password1'];

                $tmp_name = $fotoProfil["tmp_name"];
                $fotoName = $fotoProfil["name"];
                move_uploaded_file($tmp_name, "assets/".$fotoName);
                $str_query = "insert into msuser values('".$_POST['namaDepan']."', '".$_POST['namaTengah']."', '".$_POST['namaBelakang']."', '".$_POST['tempatLahir']."', '".$_POST['tanggalLahir']."', '".$_POST['NIK']."', '".$_POST['wargaNegara']."', '".$_POST['email']."', '".$_POST['noHp']."', '".$_POST['alamat']."', '".$_POST['kodePos']."', '".$_POST['username']."', '".$_POST['password1']."','"."assets/".$fotoName."')";
                $query = mysqli_query($connection, $str_query);
                
                // echo"halo";
                if($query){
                    echo "<script>";
                        echo "alert('Data berhasil ditambahkan')";
                    echo "</script>";
                    echo "<script>";
                        echo "window.location='index.php";
                    echo "</script>";
                }else{
                    echo "<script>";
                        echo "alert('Data gagal ditambahkan')";
                    echo "</script>";
                    echo "<script>";
                        echo "windows.location='registration.php'";
                    echo "</script>";
                    //echo mysqli_error();
                }
            }
            header("location:index.php");  
        }   
    }
    ?>
</body>
</html>