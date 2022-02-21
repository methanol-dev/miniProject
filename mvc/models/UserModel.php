<?php
class UserModel extends DB
{
    public function GetInfoUser()
    {
        $qr = 'SELECT * FROM users';
        return mysqli_query($this->con, $qr);
    }

}
