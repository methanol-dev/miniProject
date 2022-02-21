<?php

class DB
{
    public $con;
    protected $servername = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'mini_project';

    public $cookie_name = 'siteAuth';

    public $cookie_time = (3600 * 24 * 30);
    public function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
