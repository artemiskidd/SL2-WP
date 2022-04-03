<?php
    session_start();
    include("config.php");
    if(isset($_POST['login'])){
        $str_query = "select * from msuser where username = '".$_POST['username']."'";
        $query = mysqli_query($connection, $str_query);
        $user = mysqli_fetch_array($query);

        if(!empty($_POST['username']) && !empty($_POST['password']) && $_POST['username'] == $user['username'] && $_POST['password'] == $user['password1']){
            $_SESSION['username'] = $_POST['username'];
            header("location:home.php");
        }else{
            header("location:login.php");
        }
    }
?>