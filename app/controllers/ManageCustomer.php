<?php 

class ManageCustomer extends Controller{
    public function index(){
        session_start();
        if (isset($_SESSION['id_user'])) {
            $this->view('admin/manageCustomer');
        } else {
            $this->view('user/login');
       }
    }
}

?>

