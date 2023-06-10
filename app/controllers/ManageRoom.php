<?php 

class ManageRoom extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header('Location:'. BASEURL .'/');
        } else {
            $data['countUser'] = $this->model('User_Model')->jumlahUser();
            $this->view('admin/manageRoom', $data);
            
       }
    }
}

?>

