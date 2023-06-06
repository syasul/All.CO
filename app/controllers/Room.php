<?php 


class Room extends Controller{
    public function index(){
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('templates/header_user');
            $this->view('user/room');
            $this->view('templates/footer');
        } else {
            $this->view('templates/header_guest');
            $this->view('user/room');
            $this->view('templates/footer');
       }
    }

    public function detail(){
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('templates/header_user');
            $this->view('user/detail-room');
            $this->view('templates/footer');
        } else {
            $this->view('templates/header_guest');
            $this->view('user/detail-room');
            $this->view('templates/footer');
       }
    }
}


?>