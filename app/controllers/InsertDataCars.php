<?php

class InsertDataCars extends Controller {
  public function index()
  {
    $data["judul"] = "Tambah Data Cars";
    $this->view("templates/header", $data);
    $this->view("InsertDataCars/index");
    $this->view("templates/footer");
  }
}