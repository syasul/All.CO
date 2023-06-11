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

      public function getAllUser  (){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
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

      public function getDataUserById($id_user)
      {
          $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
          $this->db->bind('id_user', $id_user);
          return $this->db->single();
      }

      public function updateDataUser($data)
      {
          $query = "UPDATE tb_user SET
                      username = :username,
                      password = :password,
                      role = :role,
                    WHERE id_user = :id_user";
          
          $this->db->query($query);
          $this->db->bind('username', $data['username']);
          $this->db->bind('password', $data['password']);
          $this->db->bind('role', $data['role']);
          $this->db->bind('id_user', $data['id_user']);
  
          $this->db->execute();
  
          return $this->db->rowCount();
      }

      public function hapusDataUser($id_user)
      {
          $query = "DELETE FROM tb_user WHERE id_user = :id_user";
          
          $this->db->query($query);
          $this->db->bind('id_user', $id_user);
  
          $this->db->execute();
  
          return $this->db->rowCount();
      }

      public function jumlahUser(){
        $query = "SELECT COUNT(*) AS total_count FROM tb_user;";
        $this->db->query($query);
  
          $this->db->execute();
  
          return $this->db->single();
      }
}

?>