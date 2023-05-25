<?php 


class Room extends Controller{
    public function index(){
        $this->view('user/room', $data = []);
    }

    public function detail(){
        $this->view('user/detail-room');
    }
}


?>