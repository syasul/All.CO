<?php 




class User_Model{

    private $table = 'tb_log';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data){

            $query = "INSERT INTO tb_log VALUES ('', :log,)";
        
            $this->db->query($query);
            $this->db->bind(':log', $data['log']);

            $this->db->execute();

            return $this->db->rowCount();
    }
}

?>