<?php 



class Home extends Controller{
    public function index(){
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('templates/header_user');
            $this->view('user/home');
            $this->view('templates/footer');
        } else {
            $this->view('templates/header_guest');
            $this->view('user/home');
            $this->view('templates/footer');
       }
    }
}


?>