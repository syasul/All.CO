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
    <link rel="stylesheet" href="CSS/register.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <div class="register">
        <div class="row">
            <div class="col-sm-6">
                <div class="content-image">
                    <img src="./images/imageRegister.png" alt="" srcset="">
                    <div class="content-image-content">
                        <div class="logo"><img src="./images/logo.png" alt="" srcset=""></div>
                        <div class="welcome">WELCOME</div>
                        <div class="register-text">We are pleased that you have chosen us as your travel destination.
                            Please complete the registration form with the required information to start the booking
                            process</div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="register-out-side">
                    <div class="register-in-side">
                        <div class="title-register">Register.</div>
                        <form action="<?= BASEURL ?>/register/register" method="POST">
                            <div class="mb-3">
                                <!-- mb adalah singkatan dari margin bottom dan 3 adalah value dari margin tersebut -->
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <!-- type adalah tipe inputan dari textfield -->
                                <input type="text" class="form-control shadow-none" placeholder="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputpassword1" class="form-label">password</label>
                                <input type="password" class="form-control shadow-none" placeholder="password" name="password">
                            </div>
                            <button class="butt" type="submit">REGISTER</button>
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