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
    <h1>Edit Profile <br></h1>
    <form action="" method="post" enctype="multipart/form-data">
        
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
                <td>
                <input type="submit" value="Update" name="submit">
                </td>
                <td>
                    <a href="profile.php">Kembali</a>
                </td>
            </tr>
        </table>        
    </form>
    <?php
        session_start();
        
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
           
        if(!empty($_POST["namaDepan"])){
            $namaDepan = test_input($_POST["namaDepan"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$namaDepan)) {
                echo "Invalid namaDepan format";
                $flag=false;
            }
        }
        if(!empty($_POST["namaTengah"])){
            $namaTengah = test_input($_POST["namaTengah"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$namaDepan)) {
                echo "Invalid namaTengah format";
                $flag=false;
            }
        }
        if(!empty($_POST["namaBelakang"])){
            $namaBelakang = test_input($_POST["namaBelakang"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$namaBelakang)) {
                echo "Invalid namaBelakang format";
                $flag=false;
            }
        }
        if(!empty($_POST["tempatLahir"])){
            $tempatLahir = test_input($_POST["tempatLahir"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$tempatLahir)) {
                echo "Invalid tempatLahir format";
                $flag=false;
            }
        }
        if(!empty($_POST["NIK"])){
            $NIK = test_input($_POST["NIK"]);
            if (!preg_match('~[0-9]+~',$NIK)) {
                echo "Invalid NIK format";
                $flag=false;
            }
        }
        if(!empty($_POST["wargaNegara"])){
            $wargaNegara = test_input($_POST["wargaNegara"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$wargaNegara)) {
                echo "Invalid wargaNegara format";
                $flag=false;
            }
        }
        if(!empty($_POST["email"])){
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format";
                $flag=false;
            }
        }
        if(!empty($_POST["noHp"])){
            $noHp = test_input($_POST["noHp"]);
            if (strlen($noHp) < 5 || !preg_match('~[0-9]+~',$noHp) || !startsWith($noHp, "08")) {
                echo "Invalid noHp format";
                $flag=false;
            }
        }
        if(!empty($_POST["alamat"])){
            $alamat = test_input($_POST["alamat"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$alamat)) {
                echo "Invalid alamat format";
                $flag=false;
            }
        }
        if(!empty($_POST["kodePos"])){
            $kodePos = test_input($_POST["kodePos"]);
            if (strlen($kodePos) < 5 || !preg_match('~[0-9]+~',$kodePos)) {
                echo "Invalid kodePos format";
                $flag=false;
            }
        }
        if ($_FILES["fotoProfil"]["tmp_name"]) {
            $fotoProfil = $_FILES["fotoProfil"];
        }
        
        if($flag){
            include("config.php");
            if(isset($_POST['submit'])){
                // $_SESSION['namaDepan'] = $_POST['namaDepan'];
                // $_SESSION['namaTengah'] = $_POST['namaTengah'];
                // $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
                // $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
                // $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
                // $_SESSION['NIK'] = $_POST['NIK'];
                // $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
                // $_SESSION['email'] = $_POST['email'];
                // $_SESSION['noHp'] = $_POST['noHp'];
                // $_SESSION['alamat'] = $_POST['alamat'];
                // $_SESSION['kodePos'] = $_POST['kodePos'];   
                // $_SESSION['fotoProfil'] = $fotoProfil;
                // $_SESSION['username'] = $_POST['username'];
                // $_SESSION['password1'] = $_POST['password1'];

                if (!empty($_POST["namaDepan"])) {
                    // $str_query = "select * from msuser where username = '".$_POST['username']."'";
                    echo $_SESSION['namaDepan'].$_POST['namaDepan'].$_SESSION['username'];
                    $str_query = "UPDATE msuser SET namaDepan='".$_POST["namaDepan"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["namaTengah"])) {
                    $str_query = "UPDATE msuser SET namaTengah='".$_POST["namaTengah"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["namaBelakang"])) {
                    $str_query = "UPDATE msuser SET namaBelakang='".$_POST["namaBelakang"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["tempatLahir"])) {
                    $str_query = "UPDATE msuser SET tempatLahir='".$_POST["tempatLahir"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["tanggalLahir"])) {
                    $str_query = "UPDATE msuser SET tanggalLahir='".$_POST["tanggalLahir"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["NIK"])) {
                    $str_query = "UPDATE msuser SET NIK='".$_POST["NIK"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["wargaNegara"])) {
                    $str_query = "UPDATE msuser SET wargaNegara='".$_POST["wargaNegara"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["email"])) {
                    $str_query = "UPDATE msuser SET email='".$_POST["email"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["noHp"])) {
                    $str_query = "UPDATE msuser SET noHp='".$_POST["noHp"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["alamat"])) {
                    $str_query = "UPDATE msuser SET alamat='".$_POST["alamat"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($_POST["kodePos"])) {
                    $str_query = "UPDATE msuser SET kodePos='".$_POST["kodePos"]."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                if (!empty($fotoProfil)) {
                    $tmp_name = $fotoProfil["tmp_name"];
                    $fotoName = $fotoProfil["name"];
                    move_uploaded_file($tmp_name, "assets/".$fotoName);
                    $str_query = "UPDATE msuser SET fotoProfil='"."assets/".$fotoName."' where msuser.username = '".$_SESSION['username']."'";
                    $query = mysqli_query($connection, $str_query);
                }
                
                
                // echo"halo";
                if($query){
                    echo "<script>";
                        echo "alert('Data berhasil diupdate')";
                    echo "</script>";
                    echo "<script>";
                        echo "window.location='index.php";
                    echo "</script>";
                }else{
                    echo "<script>";
                        echo "alert('Data gagal diupdate')";
                    echo "</script>";
                    echo "<script>";
                        echo "windows.location='registration.php'";
                    echo "</script>";
                    //echo mysqli_error();
                }
            }
            header("location:prof.php");  
        }   
    }
    ?>
</body>
</html>