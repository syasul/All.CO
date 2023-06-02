<?php 


class Register extends Controller{
    public function index(){
        $this->view('user/register');
    }

    public function register(){
        if ($this->model('User_Model')->register($_POST) > 0) {
            header('Location:'. BASEURL . '/Home');
            exit;
        }
    }

    
}


?>