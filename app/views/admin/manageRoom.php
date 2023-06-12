<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>All.CO</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/manage-room.css">
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
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/manageorder">Manage
                            Order</a>
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


    <div class="content">
        <!-- total customer dan ruangan -->
        <div class="row d-flex justify-content-center">
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text">Total Room</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="jumlah">0</div>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text">Total Customer</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="jumlah">
                            <?= $data['countUser']['total_count'] ?>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text">Kamar Terbooking</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="jumlah">0</div>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text">Total Penyewaan</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="jumlah">0</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- data -->
        <div class="d-flex justify-content-between">
            <button type="button" class=" button-data print" data-bs-whatever="@mdo"><img src="./images/print.png" alt=""> Print Room</button>
            <button type="button" class=" button-data add" data-bs-toggle="modal" data-bs-target="#exampleModalAdd" data-bs-whatever="@mdo"><img src="./images/add-data.png" alt=""> Create Room</button>

        </div>

        <div class="table-room">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Name Room</th>
                        <th scope="col" class="text-center">image</th>
                        <th scope="col" class="text-center">Description</th>
                        <th scope="col" class="text-center">Total Rooms</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['room'] as $index => $room) : ?>
                        <tr>
                            <th scope="row" class="text-center">
                                <?= $index + 1 ?>
                            </th>
                            <td class="text-center">
                                <?= $room['name_room'] ?>
                            </td>
                            <td class="text-center"><img style="width: 130px; height: 130px;" src="<?= BASEURL; ?>/images/images_rooms/<?= $room['image'] ?>">

                            </td>
                            <td class="text-center">
                                <?= $room['description'] ?>
                            </td>
                            <td class="text-center">
                                <?= $room['total_rooms'] ?>
                            </td>
                            <td class="text-center">
                                <?= $room['price'] ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= BASEURL; ?>/manageroom/updateRoom/<?= $room['id_room'] ?>" class="btn shadow-none btn-warning showModalUpdate" data-bs-toggle="modal" data-bs-target="#ModalUpdate" data-id="<?= $user['id_room']; ?>" onclick="detail(<?= $user['id_room']; ?>,'<?= $user['username']; ?>','<?= $user['password']; ?>','<?= $user['role']; ?>')"><img class="modal-icon" src="<?= BASEURL; ?>/images/edit.png" alt="" srcset=""></a>
                                <a href="<?= BASEURL; ?>/manageroom/deleteRoom/<?= $room['id_room']; ?>" class="btn shadow-none btn-danger" data-bs-target="#exampleModalDelete"> <img class="modal-icon" src="<?= BASEURL; ?>/images/trash.png" alt="" srcset=""></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>


    <!-- footer -->
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



    <!-- modal add -->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Room</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- kalau tidak dikasih enctype, file akan dirubah menjadi string. karena form tidak mengizinkan untuk mengolah file -->
                    <form action="<?= BASEURL; ?>/manageroom/addRoom" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name Room</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="name of room" name="name_room">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image Room</label>
                            <input type="file" class="form-control shadow-none" id="recipient-name" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control shadow-none" id="message-text" placeholder="description" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Total Room</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="total" name="total_room">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Price</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="price" name="price">
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
                    <h5 class="modal-title" id="exampleModalLabel">Update Room</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASEURL ?>/manageuser/updateUser" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <input type="hidden" name="id_user" id="id_user">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name Room</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="name of room" name="name_room">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image Room</label>
                            <input type="file" class="form-control shadow-none" id="recipient-name" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control shadow-none" id="message-text" placeholder="description" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Total Room</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="total" name="total_room">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Price</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" placeholder="price" name="price">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn shadow-none btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn shadow-none btn-warning">Update</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        function detail(id, username, password, role) {
            document.getElementById("id_room").setAttribute("value", id);
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







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>