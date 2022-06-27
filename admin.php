<?php
session_start();
include 'database.php';
include 'antyhack.php';

include 'extendedmain.php';
if (!isset($_SESSION['logged_id'])) {
    if (isset($_SESSION['widzialpoupa']) == 0) { //dodać sweet alert
        echo '<script>
    alert("Logged Sucesfully")
    </script>';
        $_SESSION['logout'] = 1;
    }
}



if (!isset($_SESSION['logged_id'])) {

    if (isset($_POST['user'])) {
        $login = antyhack(filter_input(INPUT_POST, 'user'));
        $password = antyhack(filter_input(INPUT_POST, 'password'));

        require_once 'database.php';

        $userQuery = $db->prepare('SELECT ID, Username, Password FROM users WHERE Username= :user');
        $userQuery->bindValue(':user', $login, PDO::PARAM_STR);
        $userQuery->execute();
        $user = $userQuery->fetch();
        $passwordhash = password_hash($user['Password'], PASSWORD_DEFAULT);

        if ($user && password_verify($password, $passwordhash)) {
            $_SESSION['logged_id'] = $user['ID'];
            unset($_SESSION['bad_attemp']);


        } else {
            $_SESSION['bad_attemp'] = true;
            header('Location: signin.php');
            exit();
        }

    } else {
        header('Location: signin.php');
        exit();
    }
}

if (isset($_SESSION['newrecord']) ){
    if(isset($_SESSION['newrecord'])==1) {
        echo '<script>
    alert("New record added sucesfully!")
    </script>';
    }else{
        echo '<script>
    alert("New record did not add!")
    </script>';
    }
}
unset($_SESSION["newrecord"]);
?>


<!DOCTYPE HTML>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="author" content="Paweł Beiger">
    <meta name="keywords" content="filmy, movies, seriale, aktorzy, video">
    <title>GIGACHAD Panel</title>
    <link rel="shortcut icon" href="/site/images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">

    <style>svg {
            display: block;
            font: 7.5em 'Montserrat';
            width: 250px;
            height: 100px;

        }

        .text-copy {
            fill: none;
            stroke: white;
            stroke-dasharray: 6% 29%;
            stroke-width: 5px;
            stroke-dashoffset: 0%;
            animation: stroke-offset 5.5s infinite linear;
        }

        .text-copy:nth-child(1) {
            stroke: #ffffff;
            animation-delay: -1;
        }

        .text-copy:nth-child(2) {
            stroke: #1e1b1b;
            animation-delay: -2s;
        }

        .text-copy:nth-child(3) {
            stroke: #ffffff;
            animation-delay: -3s;
        }

        .text-copy:nth-child(4) {
            stroke: #000000;
            animation-delay: -4s;
        }

        .text-copy:nth-child(5) {
            stroke: #f8f8f8;
            animation-delay: -5s;
        }

        @keyframes stroke-offset {
            100% {
                stroke-dashoffset: -35%;
            }
        }


    </style>

</head>
<body style="background-color: #000000;" ondragstart="return false" ondrag="return false" oncontextmenu="return false">

<!-- oncontextmenu="return false" blokada prawego przycisku myszki -->

<header>

    <nav class="navbar navbar-dark bg-custom-1 ">

        <div class="container-fluid">


            <div class="col-sm-8">
                <form class="d-flex justify-content-start">
                    <input id=searching class="form-control me-2 " type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="col-sm-3">
                        <button class="btn btn-danger" type="submit"><img src="/site/images/image2.svg" width="30"
                                                                          height="30"></button>
                    </div>
                </form>
            </div>


            <div class="container-fluid">
                <ul class="nav flex-column" style="list-style: none">
                    <li class="nav-item">
                        <form class="mr-1 mt-1" method="POST" action="logOut.php">
                            <button class="navbar-toggler" type="submit" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                Log Out
                            </button>
                        </form>
                    </li class="nav-item">
                </ul>
            </div>
        </div>
        <form method="POST" action="main.php">
            <label>
                <button class="navbar-toggler" type="submit" id="home">
                    <i class="fa fa-home"></i></button>
            </label>
        </form>

    </nav>
</header>

<div class="container">
    <div class="brand-logo"></div>
    <svg viewBox="0 0 960 300">
        <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="80%">LET'S WATCH</text>
        </symbol>

        <g class="g-ants">
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
        </g>
    </svg>
    <div class="inputs">
        <form action="insert.php" method="post">
            <label style="color: #ffffff">TITLE
                <input id="title" name="title" maxlength="20" type="text" placeholder="Title"/></label>
            <label style="color: #ffffff">YEAR
                <input id="year" name="year" type="number" placeholder="Year"/></label>
            <label id="genre" style="color: #ffffff">GENRE
                <select class="form-select" aria-label=".form-select-sm example" id="genre" name="genre">
                    <option selected value="1">Action</option>
                    <option value="2">Animation</option>
                    <option value="3">Comedy</option>
                    <option value="4">Drama</option>
                    <option value="5">Family</option>
                    <option value="6">Mystery</option>
                    <option value="7">Romance</option>
                    <option value="8">Sci-Fi</option>
                    <option value="9">Trailer</option>
                </select></label>
            <label style="color: #ffffff">DIRECTION
                <input id="dir" name="dir" type="text" placeholder="Direction"/></label>
            <label style="color: #ffffff">DESCRIPTION
                <textarea id="opis" rows="4" cols="30" name="opis" maxlength="114" placeholder="Max 110"></textarea>
            </label>
            <label class="custom-file-upload">
                <input name="cover" id="cover" type="file"/>
                Upload a movie cover
            </label>

            <label style="color: #ffffff">LINK
                <input id="link" name="link" type="text" placeholder="Link"/></label>
            <br>
            <button name="submit" type="submit">GENERATE</button>
        </form>
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
