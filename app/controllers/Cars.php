<?php

class Cars extends Controller {
  public function index()
  {
    $data["judul"] = "Data Cars";
    $data["Cars"] = $this->model("carsModel")->getAllCars();
    $this->view("templates/header", $data);
    $this->view("Cars/index", $data);
    $this->view("templates/footer");
  }

  public function tambahCars()
  {
    if ($this->model("carsModel")->tambahDataCars($_POST) > 0){
      Flasher::setFlash('Data Cars', 'berhasil', 'ditambahkan', 'success');
      header("Location:" . BASEURL . "/Cars");
      exit;
    } else{
      Flasher::setFlash('Data Cars', 'gagal', 'ditambahkan', 'danger');
      header("Location:" . BASEURL . "/Cars");
      exit;
    }
  }

  public function getUbahCars()
  {
    echo json_encode($this->model("carsModel")->getCarsById($_POST["id_cars"]));
  }

  public function editCars()
  {
    if ($this->model("carsModel")->ubahDataCars($_POST) > 0){
      Flasher::setFlash('Data Cars', 'berhasil', 'diubah', 'success');
      header("Location:" . BASEURL . "/Cars");
      exit;
    } else{
      Flasher::setFlash('Data Cars', 'gagal', 'diubah', 'danger');
      header("Location:" . BASEURL . "/Cars");
      exit; 
    }
  }

  public function hapusCars($id)
  {
    if ($this->model("carsModel")->hapusDataCars($id) > 0){
      Flasher::setFlash('Data Cars', 'berhasil', 'dihapus', 'success');
      header("Location:" . BASEURL . "/Cars");
      exit;
    } else{
      Flasher::setFlash('Data Cars', 'gagal', 'dihapus', 'danger');
      header("Location:" . BASEURL . "/Cars");
      exit;
    }
  }

}