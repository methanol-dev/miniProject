<?php

class SinhVienModel extends DB
{
    public function GetSV()
    {
        //connect db
        return 'hello';
    }

    public function Tong($a, $b)
    {
        return $a + $b;
    }

    public function SinhVien()
    {
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
}
