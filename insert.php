<?php
include 'filmy_db.php';
include_once 'antyhack.php';

$baza = connection();
if(isset($_POST['submit']))
{
    $title = antyhack($_POST['title']);
    $img = $_POST['cover'];
    $opis = $_POST['opis'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $dir = $_POST['dir'];
    $link = $_POST['link'];
    $sql = "INSERT INTO filmy_generator (`title`, `img`, `description`, `datas`,`genre`, `dir`, `link`)
     VALUES ('".$title."', '".$img."','".$opis."','".$year."', '".$genre."', '".$dir."','".$link."')";
    if ($baza->query($sql)){
        $_SESSION["newrecord"]=1;
    } else {
        $_SESSION["newrecord"]=0;
   }

    $baza->close();
}
header("Location: admin.php");
