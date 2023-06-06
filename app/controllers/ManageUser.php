<?php 

class ManageUser extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header('Location:'. BASEURL .'/');
            
        } else {
           $this->view('admin/manageUser');
       }
    }

    public function adUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];


            // if (isset($_POST["role"])) {
            //     $selectedRole = $_POST['role'];

                $data = [
                    'username' => $username,
                    'password' => $password,
                    'role' => $role
                ];

                $this->model('User_Model')->addDataUser($data);

            // }

        }
    }
}

?>

