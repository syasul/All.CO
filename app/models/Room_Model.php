<?php

class Room_Model
{

  private $table = 'tb_room';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllRoom()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getDataRoomById($id_room)
  {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE id_room=:id_room");
    $this->db->bind('id_room', $id_room);

    return $this->db->single();
  }


  public function addDataRoom($data)
  {
    $query = "INSERT INTO tb_room VALUES ('', :name_room, :image, :description, :total_room, :price)";


    $this->db->query($query);
    $this->db->bind(':name_room', $data['name_room']);
    $this->db->bind(':image', $data['image']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':total_room', $data['total_room']);
    $this->db->bind(':price', $data['price']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function updateDataRoom($data)
  {
    if (null !== $data['image'] and !empty($data['image'])) {
      $query = "UPDATE `tb_room` SET `name_room` = :name_room, `image` = :image, `description` = :description, `total_room` = :total_room, `price` = :price WHERE `id_room` = :id_room";
    } else {
      $query = "UPDATE `tb_room` SET `name_room` = :name_room, `description` = :description, `total_room` = :total_room, `price` = :price WHERE `id_room` = :id_room";
    }

    $this->db->query($query);
    $this->db->bind(':name_room', $data['name_room']);
    if (null !== $data['image'] and !empty($data['image'])) {
      $this->db->bind(':image', $data['image']);
    }
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':total_room', $data['total_room']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':id_room', $data['id_room']);

    $this->db->execute();

    return $this->db->rowCount();
  }


  public function hapusDataRoom($id_room)
  {
    $query = "DELETE FROM tb_room WHERE id_room = :id_room";

    $this->db->query($query);
    $this->db->bind('id_room', $id_room);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function jumlahRoom()
  {
    $query = "SELECT COUNT(*) AS total_room FROM tb_room;";
    $this->db->query($query);

    $this->db->execute();

    return $this->db->single();
  }
}
