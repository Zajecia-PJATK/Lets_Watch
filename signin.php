<?php
session_start();
require_once 'database.php';
include 'antyhack.php';

if(isset($_SESSION['logged_id'])){
    header('Location: admin.php');
    exit();
}

?>
<!DOCTYPE HTML>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="author" content="Paweł Beiger">
    <meta name="keywords" content="filmy, movies, seriale, aktorzy, video">
    <title>Let's Watch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .p1 {
            font-family: "Ink Free", "Courier New", monospace;
        }

        .bg-custom-1 {
            background-image: linear-gradient(to bottom, #dc3530 0%, #000000 100%);
        }
    </style>
</head>
<body style="background-color: #000000;" ondragstart="return false" ondrag="return false">
<!-- oncontextmenu="return false" blokada prawego przycisku myszki -->

<header>

    <nav class="navbar navbar-dark bg-custom-1">

        <div class="container-fluid">
            <div class="text-center" id="LOGOtext">
                <h1 class="text-white p1"> LET'S WATCH! </h1>
            </div>
            <form method="POST" action="main.php">
                <label>
                    <button class="navbar-toggler" type="submit" id="home">
                        <i class="fa fa-home"></i></button>
                </label>
            </form>
        </div>
    </nav>
</header>
<form action="admin.php" method="post">
<?php

?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input class="form-control form-control-lg" id="user" type="text" name="user" maxlength="30" placeholder="Login" required autofocus  />
                                <label class="form-label" for="user">Login</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input class="form-control form-control-lg" type="password" id="password" name="password" maxlength="30" placeholder="Password" required />
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign In</button>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>


<?php include 'extendedmain.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>           <!-- Jquery potrzebne do działania bootstrapa  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>