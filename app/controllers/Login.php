<?php 


class Login extends Controller{
    public function index(){
        $this->view('user/login', $data = []);
    }

    public function login(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $errors = $this->model('User_Model')->validateForm($username, $password);

                if (empty($errors)) {

                    echo "Error : if 2";
                    // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

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
                        header('Location:'. BASEURL . '/Home');
                      } else {
                        header('Location:'. BASEURL . '/manageroom');
                      }
                      exit;
                    } else {
                      // Login gagal, tampilkan pesan kesalahan
                    //   $errors[] = "Username atau password salah.";
                    }
                }
            
                  // Tampilkan tampilan formulir login dengan pesan kesalahan
                //   include 'login.php';
            } else {
                  // Tampilkan tampilan formulir login
                //   include 'login.php';
            }
    }

    public function logout() {
      // Hapus informasi pengguna dari sesi atau cookie
      session_unset();
      session_destroy();
      // atau unset($_SESSION['user']);
  
      // Alihkan ke halaman login
      header("Location:". BASEURL . '/login');
      exit;
    }
}


?>