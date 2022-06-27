<?php
session_start();
unset($_SESSION['logged_id']);
header('Location: signin.php');
unset($_SESSION['widzialpoupa']);

