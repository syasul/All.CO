<?php 


class Register extends Controller{
    public function index(){
        $this->view('user/register');
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $errors = $this->model('User_Model')->validateForm($username, $password);

            if (empty($errors)) {

                $data = [
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];
                    // Cek kecocokan username dan password
                $this->model('User_Model')->register($data);

                //login otomatis

                $user = $this->model('User_Model')->login($data);

                $_SESSION['id_user'] = $user;
                if ($user['role'] === 'customer') {
                    header('Location:'. BASEURL . '/Home');
                } 
                exit;
            }
        }    
    }
}

?>