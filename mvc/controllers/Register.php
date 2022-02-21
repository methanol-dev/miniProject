<?php

class Register extends Controller
{
    public function Index()
    {
        $this->view ('Register', [
            'test' => 'hello'
        ]);
    }
}
