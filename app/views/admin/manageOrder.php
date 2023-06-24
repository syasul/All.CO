<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>All.CO</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/manage-order.css">
  <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/images/favicon.ico">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">All.CO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/manageroom">Manage Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/manageuser">Manage User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/manageorder">Manage Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/log">Log Data</a>
          </li>

        </ul>
      </div>
      <a class="login-button" href="<?= BASEURL; ?>/login/logout">
        <img src="<?= BASEURL ?>/images/logout.png" alt="" srcset="">
      </a>
    </div>
  </nav>


  <div class="content" style="margin-top: 5%">
    <!-- data -->
    <div>
      <a class="btn button-data print shadow-none" href="<?= BASEURL . '/manageOrder/export'; ?>">Export Order</a>

      <!-- <button type="button" class=" button-data add" data-bs-toggle="modal" data-bs-target="#exampleModalAdd"
        data-bs-whatever="@mdo"><img src="./images/add-data.png" alt=""> Create Room</button> -->
    </div>
    <div class="table-customer">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col" class="text-center">No.</th>
            <th scope="col" class="text-center">username</th>
            <th scope="col" class="text-center" style="width: 80px">ktp</th>
            <th scope="col" class="text-center">name room</th>
            <th scope="col" class="text-center">total room</th>
            <th scope="col" class="text-center">check in</th>
            <th scope="col" class="text-center">check out</th>
            <th scope="col" class="text-center">total day</th>
            <th scope="col" class="text-center">total price</th>
            <th scope="col" class="text-center">status</th>
            <th scope="col" class="text-center">action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($order as $row) {
            $u = $this->model('User_Model')->getDataUserById($row['id_user']);
            $r = $this->model('Room_Model')->getDataRoomById($row['id_room']); ?>
            <tr>
              <th scope="row" class="text-center"><?= $no++; ?></th>
              <td class="text-center"><?= $u['username']; ?></td>
              <td class="text-center"><img src="<?= BASEURL . '/images/images_ktp/' . $row['id_order'] . '.png'; ?>" class="w-100" alt="" style="width: 40px"></td>
              <td class="text-center"><?= $r['name_room']; ?></td>
              <td class="text-center"><?= $row['total_room']; ?></td>
              <td class="text-center" nowrap><?= $row['check_in']; ?></td>
              <td class="text-center" nowrap><?= $row['check_out']; ?></td>
              <td class="text-center"><?= $row['total_day']; ?></td>
              <td class="text-center">Rp. <?= $row['total_price']; ?></td>
              <td class="text-center">
                <?php if (0 == $row['status']) { ?>
                  <span class="badge bg-secondary">Pending</span>
                <?php } else { ?>
                  <span class="badge bg-success">Approved</span>
                <?php } ?>
              </td>
              <td td class="text-center" nowrap>
                <?php if (0 == $row['status']) { ?>
                  <a class="btn btn-sm btn-primary" href="<?= BASEURL . '/manageOrder/approve/' . $row['id_order']; ?>">Approve</a>
                <?php } ?>
                <a class="btn btn-sm btn-danger" href="<?= BASEURL . '/manageOrder/delete/' . $row['id_order']; ?>">Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>