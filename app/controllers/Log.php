<?php 

class Log extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header('Location:'. BASEURL .'/');
            
        } else {
            $data['log'] = $this->model('Log_Model')->getAllLog();
            $this->view('admin/Log', $data);
            
       }
    }
}

?>

