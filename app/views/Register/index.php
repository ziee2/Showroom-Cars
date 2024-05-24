<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styleLogin.css">
</head>
<body>
    <div class="wrapper">
        <form action="<?= BASEURL; ?>/Register/registerUser" method="post">
            <h1>Registrasi</h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="register-link">
                <p><a href="<?= BASEURL; ?>">Sudah punya akun? Login</a></p>
            </div>
            <button type="submit" class="btn">Registrasi</button>
        </form>
    </div>
</body>
</html>

