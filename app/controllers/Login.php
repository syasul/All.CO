<?php


class Login extends Controller
{
  public function index()
  {
    session_start();
    $this->view('user/login');
  }

  public function login()
  {
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $errors = $this->model('User_Model')->validateForm($username, $password);

      if (empty($errors)) {
        $data = [
          'username' => $username,
          'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        // Cek kecocokan username dan password
        $user = $this->model('User_Model')->login($data);

        if ($user && password_verify($password, $data['password'])) {

          echo "Error : if 3";

          // Login berhasil, simpan informasi pengguna ke sesi atau cookie


          $_SESSION['id_user'] = $user;

          if ($user['role'] === 'customer') {
            header('Location:' . BASEURL . '/Home');
          } else {
            header('Location:' . BASEURL . '/manageroom');
          }
          exit;
        } else {
          Flasher::setFlash(' ', 'username / password', 'salah', 'warning');
          header('Location:' . BASEURL . '/login');
        }
      } else {
        Flasher::setFlash(' ', 'username / password', 'tidak boleh kosong', 'warning');
        header('Location:' . BASEURL . '/login');
      }
    } else {
      Flasher::setFlash(' ', 'error', 'Login', 'danger');
      header('Location:' . BASEURL . '/login');
    }
  }

  public function logout()
  {
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');
    session_regenerate_id(true);
    header("Location:" . BASEURL . '/');
    exit;
  }
}
