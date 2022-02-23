<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/miniProject/public/css/style.css">
    <title>Login</title>
</head>

<body>

    <form action="http://localhost/miniProject/Login/handleLogin" method="post" style="width: 500px; margin: 0 auto; margin-top: 150px;">
        <div class="container">
            <div>
                <?php
                if (isset($data['validate'])) {
                    echo "<p style='color:red;'>" . $data['validate'] . "</p>";
                }
                if (isset($data['mess'])) {
                    echo "<p style='color:red;'>" . $data['mess'] . "</p>";
                }
                ?>
            </div>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" id="user" name="user">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="pass" name="pass">

            <button type="submit" name="login">Login</button>
            <label>
                <input type="checkbox" checked='checked' name="remember"> Remember me
            </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    <?php
    if (isset($_COOKIE['user']) and isset($_COOKIE['pass'])) {
        $user = $_COOKIE['user'];
        $pass = $_COOKIE['pass'];
        echo "<script>
                document.getElementById('user').value = '$user';
                document.getElementById('pass').value = '$pass';
            </script>";
    }
    ?>
</body>

</html>