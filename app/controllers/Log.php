<?php 

class Log extends Controller{
    public function index(){
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('admin/log');
        } else {
            $this->view('user/login');
       }
    }
}

?>

