
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/indexstyle.css">
</head>
<body>

<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li>
                    <a href="./index.php">
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li >
                    <a href="./edit.php">
                        <h4>List Data</h4>
                    </a>
                </li>
                <li class="active">
                    <a href="./insert.php">
                        <h4>Insert Data</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <h4>Logout</h4>
                    </a>
                </li>
            </ul>
        </div>

    <div class="main--content">
            
            <form action="">
                
                <!-- Elemen formulir untuk Nama Pasien -->
                <div class="mb-3">
                    <label for="nama_Apoteker" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="nama_Apoteker" name="nama_Apoteker" required>
                </div>
    
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Type</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
    
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="telepon" class="form-label">Stock</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                
                <div class="mb-3">
                    <label for="telepon" class="form-label">Price</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    
</body>
</html>
