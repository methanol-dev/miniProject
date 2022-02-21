<?php

class Login extends Controller
{

    public function index()
    {
        if (isset($_SESSION['user'])) {
            header("Location:http://localhost/miniProject/Home");
        } else {
            $this->view('Login', []);
        }
    }
    public function handleLogin()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mini_project';

        if (isset($_POST['login'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $con = mysqli_connect($servername, $username, $password, $dbname) or die('Unable To connect');
            $qr = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";
            $result = mysqli_query($con, $qr);
            $row = mysqli_fetch_array($result);
            if (is_array($row)) {
                if(isset($_POST['remember'])){
                    setcookie('user', $row['user'], time() + 3600*24*30);
                    setcookie('pass', $row['pass'], time() + 3600*24*30);
                }
                $_SESSION['user'] = $row['user'];
                header("Location:http://localhost/miniProject/Home");
            } else {
                echo 'sai username, password';
            }
        }
    }
}
