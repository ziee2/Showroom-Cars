<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li class="active">
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
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
            

            <form action="<?= BASEURL; ?>/Cars/tambahCars" method="post">
                
                <!-- Elemen formulir untuk Nama Pasien -->
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
    
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                </div>
    
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" required>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>
