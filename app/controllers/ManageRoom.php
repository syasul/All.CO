<?php 

class ManageRoom extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            
            header('Location'. BASEURL .'/login');
            
        } else {
           $this->view('admin/manageroom');
            
       }
    }
}

?>

