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
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <div class="login">
        <div class="row">
            <div class="col-sm-6">
                <div class="content-image">
                    <img src="./images/imageLogin.png" alt="" srcset="">
                    <div class="content-image-content">
                        <div class="logo"><img src="./images/logo.png" alt="" srcset=""></div>
                        <div class="welcome">WELCOME</div>
                        <div class="login-text">We're glad you have chosen to stay at our hotel. Please enter your login
                            information to proceed</div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="login-out-side">
                    <div class="login-in-side">
                        <div class="title-login">Login.</div>
                        <form action="<?= BASEURL ?>/login/login" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control shadow-none" placeholder="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputpassword1" class="form-label">password</label>
                                <input type="password" class="form-control shadow-none" placeholder="password" name="password">
                            </div>
                            <button class="butt" type="submit">LOGIN</button>
                            <div class="belum-punya-akun">Belum punya akun? <a href="<?= BASEURL ?>/register">Register</a></div>
                        </form>
                    </div>
                </div>
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