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

    <nav class="navbar navbar-dark bg-custom-1">

        <div class="container-fluid">
            <div class="text-center" id="LOGOtext">
                <h1 class="text-white p1"> LET'S WATCH! </h1>
            </div>
            <form method="POST" action="main.php">
                <label>
                    <input class="navbar-toggler" type="submit" value="Home" id="home">
                </label></form>
        </div>
    </nav>
</header>
<h3 class="text-white">
    Short history...
    <small class="text-muted text-white">Web Contributor tells</small>
</h3>
<?php include 'extendedmain.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>           <!-- Jquery potrzebne do działania bootstrapa  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>