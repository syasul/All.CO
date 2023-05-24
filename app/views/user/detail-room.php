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
    <link rel="stylesheet" href="CSS/detail-room.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <!-- navbar -->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">All.CO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="room.html">Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#testimoni">Contact</a>
                        </li>
                    </ul>
                </div>
                <a class="login-button" href="login.html">
                    Login
                </a>
            </div>
        </nav>
    </header>

    <!-- content -->
    <div class="content">
        <div class="row">
            <div class="col-sm-8">
                <div class="image-side"></div>
            </div>
            <div class="col-sm-4">
                <div class="description-side">
                    <div class="description-side-text">
                        <div class="text-header">Penthouse Suite</div>
                        <div class="text-price">Rp. 120.000,- /Day</div>
                        <div class="text-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                            an unknown printer took a galley of type and scrambled it to make a type specimen book</div>
                    </div>
                    <div class="booking-side">
                        <form>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="Name" disabled>

                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Ktp</label>
                                <input type="file" class="form-control shadow-none" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="ktp">

                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Check In</label>
                                <input type="date" class="form-control shadow-none" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Check Out</label>
                                <input type="date" class="form-control shadow-none" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>


                            <button>BOOK</button>
                        </form>
                    </div>
                </div>
            </div>
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