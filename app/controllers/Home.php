<?php 


class Home extends Controller{
    public function index(){
        $this->view('templates/header_guest');
        $this->view('user/home');
        $this->view('templates/footer');
    }
}


?>