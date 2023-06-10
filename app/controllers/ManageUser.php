<?php 

class ManageUser extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header('Location:'. BASEURL .'/');
            
        } else {
           $data['user'] = $this->model('User_Model')->getAllUser();
           $this->view('admin/manageUser', $data);
       }
    }

    public function addUser()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $data = [
                'username' => $username,
                'password' => $password,
                'role' => $role
            ];

            // log
                session_start();
                $_SESSION['username'];
                echo($_SESSION["username"]);die;


                $log = [
                    'date_log' => date("Y-m-d H:i:s"),
                    'log_data' => $username ." menambahkan data " . "{" . $username . ", " . $password .", " . $role . ", }" 
                ];
    
                $this->model('Log_Model')->log($log);
            

                

            $this->model('User_Model')->addDataUser($data);
            
            header('Location:'. BASEURL .'/manageuser');

            // }

        }
           
    }

    public function updateUser($id_user)
    {
        # code...
    }

    public function deleteUser($id_user)
    {
        if ($this->model('User_Model')->hapusDataUser($id_user) > 0) {
            
            header('Location:'. BASEURL .'/manageuser');
            exit;   
        } else {
            header('Location:'. BASEURL .'/manageuser');
            exit;
        }
    }
}

?>

