<?php

class About extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            $data['user'] = $_SESSION['id_user']['username'];
            $this->view('templates/header_user', $data);
            $this->view('user/about');
            $this->view('templates/footer');
        } else {
            $this->view('templates/header_guest');
            $this->view('user/about');
            $this->view('templates/footer_backup');
        }
    }
}
