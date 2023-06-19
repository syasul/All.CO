<?php

class Order_Model
{
  private $table = 'tb_order';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllOrder()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getAllOrderUser($id)
  {
    $this->db->query('SELECT *,tb_order.total_room as total_order FROM ' . $this->table . " LEFT JOIN tb_room ON tb_order.id_room = tb_room.id_room WHERE id_user= $id");
    return $this->db->resultSet();
  }

  public function getDataOrderById($id_order)
  {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE id_order=:id_order");
    $this->db->bind('id_order', $id_order);

    return $this->db->single();
  }

  public function addDataOrder($data)
  {
    // $query = "INSERT INTO tb_order VALUES ('', :id_user, :id_room, :total_room, :check_in, :check_out, :total_day, :total_price, 0";
    $query = "INSERT INTO `tb_order` SET `id_user` = :id_user, `id_room` = :id_room, `total_room` = :total_room, `check_in` = :check_in, `check_out` = :check_out, `total_day` = :total_day, `total_price` = :total_price, `status` = 0";

    $this->db->query($query);
    $this->db->bind(':id_user', $data['id_user']);
    $this->db->bind(':id_room', $data['id_room']);
    $this->db->bind(':total_room', $data['total_room']);
    $this->db->bind(':check_in', $data['check_in']);
    $this->db->bind(':check_out', $data['check_out']);
    $this->db->bind(':total_day', $data['total_day']);
    $this->db->bind(':total_price', $data['total_price']);

    $this->db->execute();

    // return $this->db->rowCount();
    return $this->db->lastInsertId();
  }

  public function approveOrder($id_order)
  {
    $o = $this->getDataOrderById($id_order);
    $this->db->query("UPDATE `tb_room` SET `total_room` = `total_room` - " . $o['total_room'] . " WHERE `id_room` = :id_room");
    $this->db->bind('id_room', $o['id_room']);
    $this->db->execute();
    $this->db->query("UPDATE `tb_order` SET `status` = 1 WHERE `id_order` = :id_order");
    $this->db->bind('id_order', $id_order);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteOrder($id_order)
  {
    $o = $this->getDataOrderById($id_order);
    if (0 < $o['status']) {
      $this->db->query("UPDATE `tb_room` SET `total_room` = `total_room` + " . $o['total_room'] . " WHERE `id_room` = :id_room");
      $this->db->bind('id_room', $o['id_room']);
      $this->db->execute();
    }
    $this->db->query("DELETE FROM `tb_order` WHERE `id_order` = :id_order");
    $this->db->bind('id_order', $id_order);
    $this->db->execute();
    return $this->db->rowCount();
  }



  public function jumlahRoomReserved()
  {
    $query = "SELECT COUNT(*) AS total_room_reserved FROM tb_order WHERE total_room;";
    $this->db->query($query);

    $this->db->execute();

    return $this->db->single();
  }
}
