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
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <!-- navbar -->
    <header class="fixed-top">
        <nav class=" navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL; ?>">All.CO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/Room">Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#testimoni">Contact</a>
                        </li>
                    </ul>
                </div>
                <a class="login-button" href="<?= BASEURL ?>/login">
                    Login
                </a>
            </div>
        </nav>
    </header>

    <div class="all-contents">
        <!-- Jumbotron -->
        <div class="content">
            <img src="<?= BASEURL ?>/images/jumbo.png">
            <div class="jumbotron">
                <div class="Enjoy">Enjoy your Dream</div>
                <div class="Vacation">Vacation</div>
                <p>Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry. </p>
                <button> book now </button>
            </div>
        </div>
        <!-- desc -->
        <div class="content-desc">
            <div class="content-image-side"></div>
            <div class="content-text-side">
                <div class="content-text-side-shadow"></div>
                <div class="content-text-text"><span class="content-text-header">All.CO</span><span
                        class="content-text-value">Lorem
                        Ipsum is simply
                        dummy text of
                        the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        ever
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. </span></div>
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
                        <div class="col-4"><img src="<?= BASEURL ?>/images/facebook.png" alt=""></div>
                        <div class="col-4"><img src="<?= BASEURL ?>/images/instagram.png" alt=""></div>
                        <div class="col-4"><img src="<?= BASEURL ?>/images/twitter.png" alt=""></div>
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