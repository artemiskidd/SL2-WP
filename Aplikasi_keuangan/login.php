<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="judul">Login</div>
    <form action="loginProcess.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="login">
                </td>
                <td>
                    <a href="index.php">Kembali</a>
                </td>
                
            </tr>
        </table>
    </form>

</body>
</html>