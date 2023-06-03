<?php 


class Login extends Controller{
    public function index(){
        $this->view('user/login', $data = []);
    }

    public function login(){
        try {
            $user = $this->model('User_Model')->login($_POST);

            if ($user) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                
                if ($user['role'] == 'customer') {
                    
                    header('Location:'. BASEURL . '/Home');
                    
                } else {
                    header('Location:'. BASEURL . '/manageroom');
                }
                exit();
            }
            
        } catch (PDOException $e) {
            echo "Error : ". $e->getMessage();
        }
    }
}


?>