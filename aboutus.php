<!DOCTYPE HTML>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="author" content="Paweł Beiger">
    <meta name="keywords" content="filmy, movies, seriale, aktorzy, video">
    <title>Let's Watch</title>
    <link rel="shortcut icon" href="/site/images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        .p1 {
            font-family: "Ink Free", "Courier New", monospace;
        }

        .bg-custom-1 {
            background-image: linear-gradient(to bottom, #dc3530 0%, #000000 100%);
        }


        .container {
            display: flex;
            /*   border:1px solid red; */
            height: 80%;
            align-items: center;
        }

        svg {
            display: block;
            font: 7.5em 'Montserrat';
            width: 960px;
            height: 300px;
            margin: 0 auto;
        }

        .text-copy {
            fill: none;
            stroke: white;
            stroke-dasharray: 6% 29%;
            stroke-width: 5px;
            stroke-dashoffset: 0%;
            animation: stroke-offset 5.5s infinite linear;
        }

        .text-copy:nth-child(1){
            stroke: #4D163D;
            animation-delay: -1;
        }

        .text-copy:nth-child(2){
            stroke: #840037;
            animation-delay: -2s;
        }

        .text-copy:nth-child(3){
            stroke: #BD0034;
            animation-delay: -3s;
        }

        .text-copy:nth-child(4){
            stroke: #BD0034;
            animation-delay: -4s;
        }

        .text-copy:nth-child(5){
            stroke: #CFB53B;
            animation-delay: -5s;
        }

        @keyframes stroke-offset{
            100% {stroke-dashoffset: -35%;}
        }


    </style>
    <script>


    </script>

<body style="background-color: #000000;" ondragstart="return false" ondrag="return false">
<!-- oncontextmenu="return false" blokada prawego przycisku myszki -->
<header>
<nav class="navbar navbar-dark bg-custom-1">

    <div class="container-fluid">
        <div class="text-center" id="LOGOtext">
            <a class="navbar-brand text-white p1 insetshadow">
                <h2>LET'S WATCH!</h2>
            </a>
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
<div class="container">
    <svg viewBox="0 0 960 300">
        <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="80%">Paweł Beiger</text>
        </symbol>

        <g class = "g-ants">
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
        </g>
    </svg>
</div>
<!--<div class="text-center">-->
<!--<a class="navbar-brand text-white p1"><h2>i Julcia</h2></a>-->
<!--</div>-->




<?php include 'extendedmain.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>           <!-- Jquery potrzebne do działania bootstrapa  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>