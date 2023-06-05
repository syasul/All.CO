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
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();
            return false;
        }
    }

    public function login($username){
        try {
            $query = "SELECT * FROM tb_user WHERE username = :username";

            $this->db->query($query);
            $this->db->bind(':username', $username);
            $user = $this->db->single();

            return $user;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function validateLoginForm($username, $password) {
        $errors = [];
    
        // Validasi username
        if (empty($username)) {
          $errors[] = "Username tidak boleh kosong.";
        }
    
        // Validasi password
        if (empty($password)) {
          $errors[] = "Password tidak boleh kosong.";
        }
    
        return $errors;
      }
}

?>