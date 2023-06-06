<?php 

class ManageOrder extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            $this->view('admin/manageOrder');
        } else {
            header('Location:' . BASEURL . '/login');
       }
    }
}

?>

