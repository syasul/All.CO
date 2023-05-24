<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
