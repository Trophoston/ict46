<?php require_once '../server/connect.php';

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header('location: ../login.php');
}