<?php
class AuthController extends Controller {
    public function Register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['konfirmasipassword'];

            if ($password !== $confirmPassword) {
                Flasher::setFlash('Registrasi', 'gagal', 'Password tidak cocok', 'danger');
                header("Location:" . BASEURL . "/Register");
                exit;
            }

            $userModel = $this->model("UserModel");
            if ($userModel->Register($fullname, $username, $password)) {
                Flasher::setFlash('Registrasi', 'berhasil', '', 'success');
                header("Location:" . BASEURL . "/Login");
                exit;
            } else {
                Flasher::setFlash('Registrasi', 'gagal', 'Username sudah ada atau terjadi kesalahan', 'danger');
                header("Location:" . BASEURL . "/Register");
                exit;
            }
        } else {
            $this->view('Register/index');
        }
    }

    public function Login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = $this->model("UserModel");
            $user = $userModel->Login($username, $password);
            if ($user) {
                $_SESSION['user_id'] = $user['id']; // Simpan ID pengguna dalam sesi
                header("Location:" . BASEURL . "/home");
                exit;
            } else {
                Flasher::setFlash('Login', 'gagal', 'Username atau password salah', 'danger');
                header("Location:" . BASEURL . "/Login");
                exit;
            }
        } else {
            $this->view('Login/index');
        }
    }

    public function logout() {
        session_unset(); // Menghapus semua variabel sesi
        session_destroy(); // Menghapus sesi
        header("Location:" . BASEURL . "/Login");
        exit;
    }
}
