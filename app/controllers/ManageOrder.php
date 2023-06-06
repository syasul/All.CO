<?php 

class ManageOrder extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            // header('Location'. BASEURL .'/');
            header('Location:'. BASEURL .'/');
            
        } else {
            // header('Location:' . BASEURL . '/manageroom');
            
           $this->view('admin/manageOrder');
            
       }
    }
}

?>

