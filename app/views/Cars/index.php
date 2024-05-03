<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li >
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= BASEURL ?>/Cars">
                        <i class="fas fa-table"></i>
                        <span>Data Cars</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/InsertDataCars">
                        <i class="fas fa-table-columns"></i>
                        <span>Tambah Data Cars</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="<?= BASEURL ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

<div class="main--content">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Showroom Cars</h2>
            </div>
            <div class="user--info">
                <img src="../assets/background.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Cars</h3>
            <div class="table-container">
                


<div class="row">

    <?php foreach ( $data["Cars"] as $Cars) : ?>
    <div class="card mb-3 col-lg-6 me-3" style="max-width: 540px;">
        <div class="row g-0">   
            <div class="col-md-4">
                <img src="<?= BASEURL ?>/img/<?= basename($Cars['image_path']); ?>" class="img-fluid rounded-start tampil-image" alt="...">
            </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?= $Cars['type']; ?></h5>
            <p class="card-text"><?= $Cars['deskripsi']; ?></p>
            <p class="card-text">Unit: <?= $Cars['stock']; ?></p>
            <p class="card-text"><small class="text-body-secondary">$<?= $Cars['price']; ?></small></p>
            <td>
                <a href="<?= BASEURL; ?>/Cars/editCars/<?= $Cars['id_cars']; ?>" class="tampilModalUbah badge text-bg-success float-center" data-bs-toggle="modal" data-bs-target="#formModalCars" data-id="<?= $Cars['id_cars']; ?>">Edit</a>


                <a href="<?= BASEURL; ?>/Cars/hapusCars/<?= $Cars['id_cars']; ?>" class="badge text-bg-danger float-center" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
            </td>
        </div>
        </div>
    </div>
</div>
    <?php endforeach ?>

</div>


            </div>
        </div>
    </div>



    <div class="modal fade" id="formModalCars" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Edit Data Cars</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/Cars/editCars" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_cars" id="id_cars">

                            <!-- Elemen formulir untuk Nama Pasien -->
                            <div class="mb-3">
                                <label for="type" class="form-label">Type Car</label>
                                <input type="text" class="form-control" id="type" name="type" required>
                            </div>

                            <!-- Elemen formulir untuk TTL -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                            </div>

                            <!-- Elemen formulir untuk Alamat -->
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock" required>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Edit Data</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

