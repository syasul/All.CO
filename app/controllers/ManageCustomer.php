<?php 

class ManageCustomer extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header('Location:'. BASEURL .'/');
            
        } else {
           $this->view('admin/manageCustomer');
            
       }
    }
}

?>

