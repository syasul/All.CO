<?php


class Room extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('templates/header_user');
            $data['room'] = $this->model('Room_Model')->getAllRoom();
            $this->view('user/room', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header_guest');
            $data['room'] = $this->model('Room_Model')->getAllRoom();
            $this->view('user/room', $data);
            $this->view('templates/footer');
        }
    }

    public function detail($id_room)
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            $data['room'] = $this->model('Room_Model')->getDataRoomById($id_room);
            $this->view('templates/header_user');
            $this->view('user/detail-room', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header_guest');
            $this->view('user/detail-room');
            $this->view('templates/footer');
        }
    }


    // public function permissionBook(){
    //     session_start();
    //     if (isset($_SESSION['id_user'])) {
    //         echo 'permission Ok';
    //     } else {
    //        header('Location:' . BASEURL .'/login');

    //    }
    // }
}
