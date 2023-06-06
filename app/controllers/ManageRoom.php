<?php 

class ManageRoom extends Controller{
    public function index(){
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('admin/manageRoom');
        } else {
            $this->view('user/login');
       }
    }
}

?>

