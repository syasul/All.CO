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
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);

            $this->db->execute();

            return $this->db->rowCount();
    }

    public function login($data){
        try {
            $query = "SELECT * FROM tb_user WHERE username = :username";

            $this->db->query($query);
            $this->db->bind(':username', $data['username']);
            $user = $this->db->single();

            return $user;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function validateForm($username, $password) {
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


      public function addDataUser($data)
      {
        $query = "INSERT INTO tb_user VALUES ('', :username, :password, :role)";


        $this->db->query($query);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);

        $this->db->execute();

        return $this->db->rowCount();
      }
}

?>