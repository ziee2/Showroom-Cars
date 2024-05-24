<?php

Class Register_model{
  private $table = "users";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function tambahAkun($data)
  {
    $query = "INSERT INTO users
                VALUES
            ('', :password, :username)";
    
    $this->db->query($query);
    $this->db->bind("password", $data["password"]);
    $this->db->bind("username", $data["username"]);

    $this->db->execute();
    return $this->db->rowCount();

  }
}