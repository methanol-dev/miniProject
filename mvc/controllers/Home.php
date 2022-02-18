<?php
class Home extends Controller
{
    public function SayHi()
    {
        echo 'home-sayhi';

        $a = $this->model('SinhVienModel');
        echo $a->GetSV();
    }

    public function Show($n, $m)
    {
        echo 'home-show';

        $tong = $this->model('SinhVienModel');

        $d = $tong->Tong($m, $n);
        $this->view('Home', [
            'tong' => $d,
            'sv' => $tong->SinhVien()
        ]);
    }
}
