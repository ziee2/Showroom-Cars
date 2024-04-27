<?php
class carsModel 
{
  private $table = "cars_data";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllCars()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getColumnsCars()
  {
    $this->db->query("SHOW COLUMNS FROM ". $this->table);
    return $this->db->resultSet();
  }

  public function countCars()
    {
      $this->db->query("SELECT COUNT(*) as total FROM ". $this->table);
      $result = $this->db->single();

      return $result['total'];
    }

  public function tambahDataCars($data)
  {
    $query = "INSERT INTO " . $this->table . 
                  " VALUES
            ('', :type, :deskripsi, :stock, :price)";
    
    $this->db->query($query);
    $this->db->bind("type", $data["type"]);
    $this->db->bind("deskripsi", $data["deskripsi"]);
    $this->db->bind("stock", $data["stock"]);
    $this->db->bind("price", $data["price"]);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function getCarsById($id)
  {
    $this->db->query("SELECT * FROM ". $this->table . " WHERE id_cars=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }

  public function ubahDataCars($data)
  {
    $query = "UPDATE " . $this->table . " SET 
              type = :type,
              deskripsi = :deskripsi,
              stock = :stock,
              price = :price
            WHERE id_cars = :id_cars;";
    
    $this->db->query($query);
    $this->db->bind("id_cars", $data["id_cars"]);
    $this->db->bind("type", $data["type"]);
    $this->db->bind("deskripsi", $data["deskripsi"]);
    $this->db->bind("stock", $data["stock"]);
    $this->db->bind("price", $data["price"]);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function hapusDataCars($id)
  {
    $query = "DELETE FROM " . $this->table . 
              " WHERE id_cars = :id_cars";
    $this->db->query($query);
    $this->db->bind("id_cars", $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

}

