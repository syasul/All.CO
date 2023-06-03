<?php 


class Room extends Controller{
    public function index(){
        $this->view('templates/header_guest');
        $this->view('user/room');
        $this->view('templates/footer');
    }

    public function detail(){
        $this->view('templates/header_guest');
        $this->view('user/detail-room');
        $this->view('templates/footer');
    }
}


?>