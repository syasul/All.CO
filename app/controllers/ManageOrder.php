<?php

class ManageOrder extends Controller
{
  public function __construct()
  {
    session_start();
    if (!isset($_SESSION['id_user'])) {
      header('Location: ' . BASEURL . '/login');
    }
  }

  public function index()
  {
    $data['order'] = $this->model('Order_Model')->getAllOrder();
    $this->view('admin/manageOrder', $data);
    $this->view('templates/footer');
  }

  public function approve($id_order = null)
  {
    if (null !== $id_order) {
      $this->model('Order_Model')->approveOrder($id_order);
    }
    header('Location: ' . BASEURL . '/manageOrder');
  }

  public function delete($id_order = null)
  {
    if (null !== $id_order) {
      $this->model('Order_Model')->deleteOrder($id_order);
    }
    header('Location: ' . BASEURL . '/manageOrder');
  }

  public function export()
  {
    function filterData(&$str)
    {
      $str = preg_replace("/\t/", "\\t", $str);
      $str = preg_replace("/\r?\n/", "\\n", $str);
      if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    $fields = array('id_order', 'username', 'name_room', 'total_room', 'check_in', 'check_out', 'total_day', 'total_price', 'status');
    $excelData = implode("\t", array_values($fields)) . "\n";
    $order = $this->model('Order_Model')->getAllOrder();
    foreach ($order as $row) {
      $u = $this->model('User_Model')->getDataUserById($row['id_user']);
      $r = $this->model('Room_Model')->getDataRoomById($row['id_room']);
      $status = ($row['status'] == 1) ? 'Approved' : 'Pending';
      $lineData = array($row['id_order'], $u['username'], $r['name_room'], $row['total_room'], $row['check_in'], $row['check_out'], $row['total_day'], $row['total_price'], $status);
      array_walk($lineData, 'filterData');
      $excelData .= implode("\t", array_values($lineData)) . "\n";
    }

    header("Content-Type: application/vnd.ms-excel");
    // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="order ' . date('Y-m-d H.i.s') . '.xls"');

    echo $excelData;
    exit;
  }
}
