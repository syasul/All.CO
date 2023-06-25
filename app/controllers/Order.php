<?php

class Order extends Controller
{
  public function index()
  {
    session_start();
    if (isset($_SESSION['id_user'])) {
      $data['user'] = $_SESSION['id_user']['username'];
      $data['Order'] = $this->model('Order_Model')->getAllOrderUser($_SESSION['id_user']['id_user']);
      $this->view('templates/header_user', $data);
      $this->view('user/order', $data);
      $this->view('templates/footer_backup');
    } else {
      header('Location: ' . BASEURL . '/login');
    }
  }

  public function order($id_room = null)
  {
    if (null == $id_room) {
      header('Location: ' . BASEURL);
    }
    $room = $this->model('Room_Model')->getDataRoomById($id_room);
    if (null == $room) {
      header('Location: ' . BASEURL);
    }
    session_start();
    $user = $_SESSION['id_user'];
    if (!isset($user)) {
      header('Location: ' . BASEURL . '/login');
    }

    $id_user = $user['id_user'];
    $username = $user['username'];
    $total_room = $_POST['total_room'];
    $ktp = $_FILES['ktp']['name'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $total_day = round((strtotime($check_out) - strtotime($check_in)) / (60 * 60 * 24)) + 1;
    $total_price = $room['price'] * $total_room * $total_day;
    $status = 0;


    $data = [
      'id_user' => $id_user,
      'id_room' => $id_room,
      'ktp' => $ktp,
      'total_room' => $total_room,
      'check_in' => $check_in,
      'check_out' => $check_out,
      'total_day' => $total_day,
      'total_price' => $total_price,
      'status' => $status
    ];

    $log = [
      'date_log' => date('Y-m-d H:i:s'),
      'log_data' => $username . ' order : ' . '{' . $id_user . ', ' . $id_room . ', ' . $total_room . ', ' . $check_in . ', ' . $check_out . ', ' . $total_day . ', ' . $total_price . ', ' . $status . '}'
    ];

    $this->model('Log_Model')->addLog($log);

    $tmpFile =  $_FILES['ktp']['tmp_name'];
    $this->model('Order_Model')->addDataOrder($data);
    move_uploaded_file($tmpFile, $_SERVER['DOCUMENT_ROOT'] . '/ALL.CO/public/images/images_ktp/{$image}');


    Flasher::setFlash('Pesanan anda', 'berhasil', 'dibuat', 'success');
    header('Location:' . BASEURL . '/Order');
  }
}
