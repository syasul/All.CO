<?php

class Order extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('templates/header_user');
            $this->view('user/order');
            $this->view('templates/footer');
        } else {
            header('Location:' . BASEURL . '/login');
        }
    }
}
