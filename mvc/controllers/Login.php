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
        // $this->view('Login', []);
    }
    public function handleLogin()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mini_project';

        if (isset($_POST['login'])) {
            $user = $this->checkInput($_POST['user']);
            $pass = md5($this->checkInput($_POST['pass']));
            if ($user == '' || $pass == '') {
                $mess = 'Không được bỏ trống username, pasword';
                $this->view('Login', [
                    'validate' => $mess
                ]);
            } else {
                $con = mysqli_connect($servername, $username, $password, $dbname) or die('Unable To connect');
                $qr = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";
                $result = mysqli_query($con, $qr);
                $row = mysqli_fetch_array($result);
                if (is_array($row)) {
                    if (isset($_POST['remember'])) {
                        setcookie('user', $row['user'], time() + 3600 * 24 * 30);
                        setcookie('pass', $_POST['pass'], time() + 3600 * 24 * 30);
                    }
                    $_SESSION['user'] = $row['user'];
                    header("Location:http://localhost/miniProject/Home");
                } else {
                    $mess = 'Sai username, password!';
                    $this->view('Login', [
                        'mess' => $mess,
                    ]);
                }
            }
        }
    }

    public function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
