<?php
include 'filmy_db.php';
include_once 'antyhack.php';

$baza = new mysqli("localhost", "root", "", "movies");
if (isset($_POST["search"]) && !empty($_POST["search"])) {
    $search=antyhack($_POST["search"]);
    $filmQuery = "SELECT id, title, img, description, datas, genre, dir, link FROM filmy_generator WHERE title='" . $search . "'";
} else if (isset($_POST["sortuj"]) && ($_POST["sortuj"]) != 0) {
    switch ($_POST["sortuj"]) {
        case 1:
            $lp = "Action";
            break;
        case 2:
            $lp = "Animation";
            break;
        case 3:
            $lp = "Comedy";
            break;
        case 4:
            $lp = "Drama";
            break;
        case 5:
            $lp = "Family";
            break;
        case 6:
            $lp = "Mystery";
            break;
        case 7:
            $lp = "Romance";
            break;
        case 8:
            $lp = "Sci-Fi";
            break;
        case 9:
            $lp = "Trailer";
            break;

    }

    $filmQuery = "SELECT id, title, img, description, datas, genre, dir, link FROM filmy_generator WHERE genre='" . $lp . "'";
} else {
    $filmQuery = "SELECT id, title, img, description, datas, genre, dir, link FROM filmy_generator";
}


$result = $baza->query($filmQuery);


?>

    <link rel="stylesheet" href="flipcard.css">
<?php
if ($result->num_rows > 0) {
    echo '<br>';
    echo '<br>';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="klasa">';

        echo '<div class="card">';
        echo '<div class="face face1">';
        echo '<div class="content">';
        if (file_exists("images/" . $row["img"] . ".jpg") == true) {
            echo '<img src="images/' . $row["img"] . '.jpg" alt="">';
        } else {
            echo '<img src="images/default.jpg" alt="description">';
        }
        echo '<h3>' . $row["title"] . '</h3>';
        echo '<b><p>' . $row["datas"] . '</p></b>';
        echo '</div>';
        echo '</div>';
        echo '<div class="face face2">';
        echo '<div class="content">';
        echo '<p><b>Direction: </b>' . $row["dir"] . '</p>';
        echo '<p><b>Genre: </b>' . $row["genre"] . '</p>';
        echo '<em><p>' . $row["description"] . '</p></em>';
        echo '<a href="' . $row["link"] . '" class="btn btn-outline-danger">Read More</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';


    }
}
