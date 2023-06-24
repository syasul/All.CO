<?php


class Room extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            $data['user'] = $_SESSION['id_user']['username'];
            $data['room'] = $this->model('Room_Model')->getAllRoom();
            $this->view('templates/header_user', $data);
            $this->view('user/room', $data);
            $this->view('templates/footer_backup');
        } else {
            $this->view('templates/header_guest');
            $data['room'] = $this->model('Room_Model')->getAllRoom();
            $this->view('user/room', $data);
            $this->view('templates/footer_backup');
        }
    }

    public function detail($id_room)
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            $data['room'] = $this->model('Room_Model')->getDataRoomById($id_room);
            $data['user'] = $_SESSION['id_user']['username'];
            $this->view('templates/header_user', $data);
            $this->view('user/detail-room', $data);
            $this->view('templates/footer_backup');
        } else {
            header('Location:' . BASEURL . '/Login');
        }
    }
}
