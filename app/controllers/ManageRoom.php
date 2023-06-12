<?php

class ManageRoom extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header('Location:' . BASEURL . '/');
        } else {
            $data['countUser'] = $this->model('User_Model')->jumlahUser();
            $data['room'] = $this->model('Room_Model')->getAllRoom();
            $this->view('admin/manageRoom', $data);
        }
    }

    public function addRoom()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name_room = $_POST['name_room'];
            $image = $_FILES['image']['name'];
            $description = $_POST['description'];
            $total_room = $_POST['total_room'];
            $price = $_POST['price'];

            $tmpFile =  $_FILES['image']['tmp_name'];

            move_uploaded_file($tmpFile, $_SERVER['DOCUMENT_ROOT'] . "/ALL.CO/public/images/images_rooms/{$image}");

            $data = [
                'name_room' => $name_room,
                'image' => $image,
                'description' => $description,
                'total_room' => $total_room,
                'price' => $price,
            ];

            $this->model('Room_Model')->addDataRoom($data);

            header('Location:' . BASEURL . '/manageroom');
        }
    }

    public function updateRoom()
    {
        $id_room = $_POST['id_room'];
        $name_room = $_POST['name_room'];
        $image = $_FILES['image']['name'];
        $description = $_POST['description'];
        $total_room = $_POST['total_room'];
        $price = $_POST['price'];

        $tmpFile =  $_FILES['image']['tmp_name'];

        move_uploaded_file($tmpFile, $_SERVER['DOCUMENT_ROOT'] . "/ALL.CO/public/images/images_rooms/{$image}");

        $data = [
            'id_room' => $id_room,
            'name_room' => $name_room,
            'image' => $image,
            'description' => $description,
            'total_room' => $total_room,
            'price' => $price,
        ];

        $this->model('Room_Model')->updateDataRoom($data);
        //print_r($data);die;

        // log
        // session_start();
        // $admin = $_SESSION['id_user']["username"];


        // $log = [
        //     'date_log' => date("Y-m-d H:i:s"),
        //     'log_data' => $admin ." update data user : " . "{" . $username . ", " . $password .", " . $role . "}" 
        // ];

        // $this->model('Log_Model')->addLog($log);




        header('Location:' . BASEURL . '/manageroom');

        // }

    }

    public function deleteRoom($id_room)
    {
        if ($this->model('Room_Model')->hapusDataRoom($id_room) > 0) {

            header('Location:' . BASEURL . '/manageroom');
            // session_start();
            // $admin = $_SESSION['id_user']["username"];


            // $log = [
            //     'date_log' => date("Y-m-d H:i:s"),
            //     'log_data' => $admin ." menghapus data user "
            // ];

            // $this->model('Log_Model')->addLog($log);
            exit;
        } else {
            header('Location:' . BASEURL . '/manageroom');
            exit;
        }
    }
}
