<?php

class Order_Model
{
    private $table = 'tb_order';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
}
