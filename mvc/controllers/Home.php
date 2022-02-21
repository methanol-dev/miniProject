<?php
class Home extends Controller
{
    public function index()
    {
        $this->view('Home',[]);
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
