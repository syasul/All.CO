<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>All.CO</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/manage-user.css">
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/images/favicon.ico">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">All.CO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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

    <div class="content">
        <div class="d-flex justify-content-end">
            <button type="button" class=" button-data add" data-bs-toggle="modal" data-bs-target="#exampleModalAdd"
                data-bs-whatever="@mdo"><img src="./images/add-data.png" alt=""> Create User</button>

        </div>
        <div class="table-customer">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">No</th>

                        <th scope="col" class="text-center">Username</th>
                        <th scope="col" class="text-center">Password</th>
                        <th scope="col" class="text-center">Role</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td class="text-center">Mark</td>
                        <td class="text-center">Otto</td>
                        <td class="text-center">@mdo</td>
                        <td class="text-center"><button type="button" class="btn shadow-none btn-warning"
                                data-bs-toggle="modal" data-bs-target="#exampleModalUpdate"><img class="modal-icon"
                                    src="./images/edit.png" alt="" srcset=""></button>
                            <button type="button" class="btn shadow-none btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModalDelete"> <img class="modal-icon" src="./images/trash.png"
                                    alt="" srcset=""></button>
                        </td>
                    </tr>

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
                    <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/ManageUser/addUser" method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Usermame</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name"
                                placeholder="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="role" class="col-form-label">Role</label>
                            <select class="form-select shadow-none  " id="inputimage"
                                aria-label="Default select example" name="role">
                                <option value="customer">Customer</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn shadow-none btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn shadow-none btn-success">Create</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal update -->
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Usermame</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name"
                                placeholder="username">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="text" class="form-control shadow-none" id="recipient-name"
                                placeholder="password">
                        </div>

                        <div class="mb-3">
                            <label for="role" class="col-form-label">Role</label>
                            <select class="form-select shadow-none  " id="inputimage"
                                aria-label="Default select example" name="status">
                                <option value="Available">Customer</option>
                                <option value="Not Available">Admin</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn shadow-none btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn shadow-none btn-warning">Update</button>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>