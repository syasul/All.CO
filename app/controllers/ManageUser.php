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
                $admin = $_SESSION['id_user']["username"];


                $log = [
                    'date_log' => date("Y-m-d H:i:s"),
                    'log_data' => $admin ." menambahkan data user : " . "{" . $username . ", " . $password .", " . $role . "}" 
                ];
    
                $this->model('Log_Model')->addLog($log);
            

                

            $this->model('User_Model')->addDataUser($data);
            
            header('Location:'. BASEURL .'/manageuser');

            // }

        }
           
    }
    public function getDataUpdate()
    {
        echo json_encode($this->model('User_Model')->getDataUserById($_POST['id_user']));
    }

    public function updateUser()
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
                $admin = $_SESSION['id_user']["username"];


                $log = [
                    'date_log' => date("Y-m-d H:i:s"),
                    'log_data' => $admin ." update data user : " . "{" . $username . ", " . $password .", " . $role . "}" 
                ];
    
                $this->model('User_Model')->updateDataUser($data);
            
            header('Location:'. BASEURL .'/manageuser');

            // }

        }
        
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

