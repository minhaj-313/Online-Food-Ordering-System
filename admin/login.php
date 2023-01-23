<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Login</title>
    <link rel="icon" href="/img/logo.jpg" type="image/x-icon">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.jpg" type="image/x-icon">

    <!-- Template Main CSS File -->
    <link href="OnlinePizzaDelivery/assets/css/style.css" rel="stylesheet">

    <style>
        body {
            width: 100%;
            height: calc(100%);
            /*background: #007bff;*/
        }

        main#main {
            width: 100%;
            height: calc(100%);
            background: white;
        }

        #login-right {
            position: absolute;
            right: 0;
            width: 40%;
            height: calc(100%);
            background: white;
            display: flex;
            align-items: center;
        }

        #login-left {
            position: absolute;
            left: 0;
            width: 60%;
            height: calc(100%);
            background: #00000061;
            display: flex;
            align-items: center;
        }

        #login-right .card {
            margin: auto
        }

        .logo {
            margin: auto;
            font-size: 8rem;
            background: white;
            border-radius: 50% 50%;
            height: 29vh;
            width: 13vw;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 80%;
            width: 80%;
            margin: auto
        }


        .custom-btn {
            color: rgb(0, 0, 0);
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
            margin: auto;
        }


        .btn-1 {
            background: #FFC107;
            border: none;
            z-index: 1;
        }

        .btn-1:after {
            position: absolute;
            content: "";
            width: 0;
            height: 100%;
            top: 0;
            right: 0;
            z-index: -1;
            background-color: #00d512;
            border-radius: 5px;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            transition: all 0.3s ease;
        }

        .btn-1:hover {
            color: #fff;
        }

        .btn-1:hover:after {
            left: 0;
            width: 100%;
        }

        .btn-1:active {
            top: 2px;
        }
    </style>
</head>

<body>
    <main id="main" class=" bg-warning">
        <div id="login-left" style="background-color:black ;">
            <div class="logo">
                <img src="/OnlinePizzaDelivery/img/sample-logo.png" alt="" style="border-radius: 30px; height: 190px; width: 190px;">
            </div>
        </div>
        <div id="login-right" style="background-color: #FFC107;">
            <div class="card col-md-8 text-warning" style="background-color: black;">
                <div class="card-body">
                    <form action="partials/_handleLogin.php" method="post">
                        <div class="form-group">
                            <label for="username" class="control-label"><b>Username</b></label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label"><b>Password</b></label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <center><button type="submit" class="btn btn-light">Login</button></center>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <?php
    if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false") {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Invalid Credentials
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                </div>';
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>

</html>