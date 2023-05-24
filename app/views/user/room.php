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
    <link rel="stylesheet" href="CSS/room.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <!-- navbar -->
    <header class="fixed-top">
        <nav class=" navbar navbar-expand-lg">
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
    <div class="content">
        <div class="content-room">
            <div class="p-5">
                <div class="d-flex justify-content-end">


                    <div class="text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                        <label class="mr-2">Sort by:</label>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle shadow-none" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Relevance
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Relevance</a></li>
                                <li><a class="dropdown-item" href="#">Price Descending</a></li>
                                <li><a class="dropdown-item" href="#">Price Ascending</a></li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="row row-cols-1 row-cols-md-5 ">


                    <div class="col mb-3">
                        <div class="card h-100">
                            <img src="./images/room-imahe.png" class="card-img-top" alt="...">

                            <div class="card-text">
                                <div class="row fw-bold fs-5 mb-1">
                                    <div class="name-room">Penthouse Suite</div>
                                </div>
                                <div class="fs-6 mb-1  desc-room harga">Rp. 120.000,- /Day</div>
                                <div class="fs-6 mb-3 desc-room">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.</div>
                                <div class="row d-flex justify-content-end">
                                    <a class="button-book btn col-5 text-white shadow-none"
                                        href="detail-room.html">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="foot footer mt-auto py-3">
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