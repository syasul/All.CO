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
            $data['countRoomReserved'] = $this->model('Order_Model')->jumlahRoomReserved();
            $data['room'] = $this->model('Room_Model')->getAllRoom();
            $data['countRoom'] = $this->model('Room_Model')->jumlahRoom();
            $this->view('admin/manageRoom', $data);
        }
    }

    public function addRoom()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name_room = $_POST['name_room'];
            $image = $_FILES['image']['name'];
            $description = str_replace("'", " ", $_POST['description']);
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

            session_start();
            $admin = $_SESSION['id_user']["username"];


            $log = [
                'date_log' => date("Y-m-d H:i:s"),
                'log_data' => $admin . " menambahkan data room : " . "{" . $name_room . ", " . $tmpFile . ", " . $description . ", " . $total_room . ", " . $price . "}"
            ];

            $this->model('Log_Model')->addLog($log);
            Flasher::setFlash('Data Room', 'berhasil', 'ditambahkan', 'success');

            header('Location:' . BASEURL . '/manageroom');
        } else {
            Flasher::setFlash('Data Room', 'gagal', 'ditambahkan', 'danger');

            header('Location:' . BASEURL . '/manageroom');
        }
    }

    public function updateRoom()
    {
        $id_room = $_POST['id_room'];
        $name_room = $_POST['name_room'];
        $image = $_FILES['image']['name'];
        $description = str_replace("'", " ", $_POST['description']);
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
        session_start();
        $admin = $_SESSION['id_user']["username"];


        $log = [
            'date_log' => date("Y-m-d H:i:s"),
            'log_data' => $admin . " update data room : " . "{" . $name_room . "}"
        ];

        $this->model('Log_Model')->addLog($log);
        Flasher::setFlash('Data Room', 'berhasil', 'diubah', 'success');
        header('Location:' . BASEURL . '/manageroom');

        // }

    }

    public function deleteRoom($id_room)
    {
        if ($this->model('Room_Model')->hapusDataRoom($id_room) > 0) {

            header('Location:' . BASEURL . '/manageroom');
            session_start();
            $admin = $_SESSION['id_user']["username"];


            $log = [
                'date_log' => date("Y-m-d H:i:s"),
                'log_data' => $admin . " menghapus data Room "
            ];

            $this->model('Log_Model')->addLog($log);
            Flasher::setFlash('Data Room', 'berhasil', 'dihapus', 'success');
            exit;
        } else {
            Flasher::setFlash('Data Room', 'gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/manageroom');
            exit;
        }
    }
}
