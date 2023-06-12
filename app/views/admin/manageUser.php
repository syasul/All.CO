<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>All.CO</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/manageuser.css">
  <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/images/favicon.ico">
</head>

<body>
  <!-- navbar -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">All.CO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/manageroom">Manage Room</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/manageuser">Manage User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/manageorder">Manage Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/log">Log Data</a>
            </li>

          </ul>
        </div>
        <a class="login-button" href="<?= BASEURL; ?>/login/logout">
          <img src="<?= BASEURL ?>/images/logout.png" alt="" srcset="">
        </a>
      </div>
    </nav>
  </header>

  <div class="content">
    <div class="d-flex justify-content-end">
      <button type="button" class=" button-data add" data-bs-toggle="modal" data-bs-target="#ModalAdd" data-bs-whatever="@mdo"><img src="./images/add-data.png" alt=""> Create User</button>

    </div>
    <div class="table-customer">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col" class="text-center">No</th>

            <th scope="col" class="text-center">Username</th>

            <th scope="col" class="text-center">Role</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['user'] as $index => $user) : ?>
            <tr>
              <th scope="row" class="text-center"><?= $index + 1 ?></th>
              <td class="text-center"><?= $user['username'] ?></td>

              <td class="text-center"><?= $user['role'] ?></td>
              <td class="text-center">
                <a href="<?= BASEURL; ?>/manageuser/updateUser/<?= $user['id_user'] ?>" class="btn shadow-none btn-warning showModalUpdate" data-bs-toggle="modal" data-bs-target="#ModalUpdate" data-id="<?= $user['id_user']; ?>" onclick="detail(<?= $user['id_user']; ?>,'<?= $user['username']; ?>','<?= $user['password']; ?>','<?= $user['role']; ?>')"><img class="modal-icon" src="<?= BASEURL; ?>/images/edit.png" alt="" srcset=""></a>
                <a href="<?= BASEURL; ?>/manageuser/deleteUser/<?= $user['id_user']; ?>" class="btn shadow-none btn-danger" data-bs-target="#exampleModalDelete"> <img class="modal-icon" src="<?= BASEURL; ?>/images/trash.png" alt="" srcset=""></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>


  <!-- footer -->
  <footer>
    <div class="foot">
      <div class="row">
        <div class="col-sm-11">All.CO</div>
        <div class="col-sm-1">
          <div class="row d-flex justify-content-end">
            <div class="col-4"><img src="./images/facebook.png" alt=""></div>
            <div class="col-4"><img src="./images/instagram.png" alt=""></div>
            <div class="col-4"><img src="./images/twitter.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- modal add -->
  <div class="modal fade" id="ModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL; ?>/manageuser/addUser" method="POST">

            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Usermame</label>
              <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="username" name="username">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Password</label>
              <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="password" name="password">
            </div>

            <div class="mb-3">
              <label for="role" class="col-form-label">Role</label>
              <select class="form-select shadow-none  " id="inputimage" aria-label="Default select example" name="role">
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn shadow-none btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn shadow-none btn-success">Create</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- modal update -->
  <div class="modal fade" id="ModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= BASEURL ?>/manageuser/updateUser" method="POST">
          <div class="modal-body">
            <input type="hidden" name="id_user" id="id_user">
            <div class="mb-3">
              <label for="username" class="col-form-label">Usermame</label>
              <input type="text" class="form-control shadow-none" id="username" name="username" placeholder="username">
            </div>
            <div class="mb-3">
              <label for="password" class="col-form-label">Password</label>
              <input type="text" class="form-control shadow-none" id="password" name="password" placeholder="password" readonly>
            </div>
            <div class="mb-3">
              <label for="role" class="col-form-label">Role</label>
              <select class="form-select shadow-none" id="role" name="role" aria-label="Default select example" name="role">
                <option id="customer1" value="customer">Customer</option>
                <option id="admin1" value="admin">Admin</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn shadow-none btn-secondary" data-bs-dismiss="modal" onclick="hapusselect('<?= $user['role']; ?>')">Close</button>
            <button type="submit" class="btn shadow-none btn-warning" id="update">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script language="JavaScript" type="text/javascript" src="<?= BASEURL; ?>/js/updateUser.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  <script>
    function detail(id, username, password, role) {
      document.getElementById("id_user").setAttribute("value", id);
      document.getElementById("username").setAttribute("value", username);
      document.getElementById("password").setAttribute("value", password);
      document.getElementById(role + "1").setAttribute("selected", "selected");
    }

    function hapusselect(role) {
      document.getElementById(role + "1").removeAttribute("selected", "selected");
    }
    $('#update').click(function update() {
      let username = document.getElementById("username").value;
      let password = document.getElementById("password").value;
      let role = document.getElementById("role").value;
      $.ajax({
        url: "<?= BASEURL; ?>/manageuser/updateUser",
        data: {
          username: username,
          password: password,
          role: role
        },
        method: 'POST',
        success: function(data) {
          console.log(data)
        }
      });
    });
  </script>
</body>

</html>