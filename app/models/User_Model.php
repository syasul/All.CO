<?php 


class User_Model{

    private $table = 'tb_user';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data){
        try {
            $query = "INSERT INTO tb_user VALUES ('', :username, :password, 'customer')";
        

            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();
            return false;
        }
    }

    public function login($data){
        try{
            $query = "SELECT * FROM tb_user WHERE username = :username";

            $this->db->query($query);
            $this->db->bind('username', $data['username']);

            $this->db->execute();

            $user = $this->db->single();

            if ($user) {
                if (password_verify('password', $data['password'])) {
                    return $user;
                }
            }

            return false;   //jika gagal login

        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();
            return false;
        }
    }
}

?>