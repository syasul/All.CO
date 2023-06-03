<?php 


class Register extends Controller{
    public function index(){
        $this->view('user/register');
    }

    public function register(){
        try {
            if ($this->model('User_Model')->register($_POST) > 0) {
                $this->model('User_Model')->login($_POST);
                header('Location:'. BASEURL . '/Home');
                exit;
            }
        } catch (PDOException $e) {
            echo "Error : ". $e->getMessage();
        }
    }
}

?>