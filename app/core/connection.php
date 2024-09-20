<?php

class Connection
{
    public $hostname = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "pertemuan_2";
    public $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database
        );
    }

    public function conn()
    {
        return $this->connection;
    }
}
