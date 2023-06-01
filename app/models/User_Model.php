<?php 


class User_Model{

    private $table = 'tb_user';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data){
        $query = "INSERT INTO tb_user VALUES ('', :username, :password, 'customer')";
        

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();

    }


}

?>