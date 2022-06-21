<?php
session_start(); //CTRL+ALT+L formatowanie kodu
?>


<!DOCTYPE HTML>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="author" content="Paweł Beiger">
    <meta name="keywords" content="filmy, movies, seriale, aktorzy, video">
    <title>Let's Watch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

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

    <nav class="navbar navbar-dark bg-custom-1 ">

        <div class="container-fluid">
            <div class="text-center" id="LOGOtext">
                <a class="navbar-brand text-white p1"><h2>LET'S WATCH!</h2></a>
            </div>
            <div class="col-sm-5">
                <form class="d-flex justify-content-start">
                    <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="submit"><img src="/site/images/image2.svg" width="30"
                                                                      height="30"></button>
                </form>
            </div>
            <div class="col-sm-2">
                <select class="form-select" aria-label=".form-select-sm example" id="sortuj" name="sortuj">
                    <option selected>Sort by film genre</option>
                    <option value="1">Action</option>
                    <option value="2">Animation</option>
                    <option value="3">Comedy</option>
                    <option value="4">Drama</option>
                    <option value="5">Family</option>
                    <option value="6">Mystery</option>
                    <option value="7">Romance</option>
                    <option value="8">Sci-Fi</option>
                    <option value="9">Trailer</option>

                </select>
            </div>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#demo" aria-label="Toggle navigation"
                    aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="demo" class="collapse">
                <div class="container-fluid">
                    <ul class="nav flex-column" style="list-style: none">
                        <li class="nav-item">
                            <form class="mr-1 mt-1" method="POST" action="signup.php">
                                <button class="navbar-toggler" type="submit" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                    Sign Up
                                </button>
                            </form>
                        </li class="nav-item">
                        <li>
                            <form class="mr-1 mt-1" method="POST" action="aboutus.php">
                                <button class="navbar-toggler" type="submit" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                    About Us
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>


<div class="jumper text-white col-md-2 justify-content-evenly">
    <div class="col-auto">
        <img class="card-img-top" src="/site/images/image1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Inception (2010)</h5>
            <button class="navbar-toggler text-white" data-toggle="collapse" data-target="#more"
                    aria-label="Toggle navigation"
                    aria-expanded="false" onclick="myFunction()">
                <i id="myDIV">More</i>
            </button>
            <div id="more" class="collapse">
                <div class="container-fluid">
                    <p class="card-text">
                        Direction: Christopher Nolan
                        Genre: Thriller / Sci-Fi
                        Production: USA / Wielka Brytania
                    </p>
                    <a href="https://www.themoviedb.org/movie/27205-inception?language=en"
                       class="btn btn-danger">LINK</a>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include 'extendedmain.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>           <!-- Jquery potrzebne do działania bootstrapa  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>