<?php 
    session_start();

    if (!isset($_SESSION['email']) && !isset($_SESSION['name']) ) {
        header('location: index.php');
    }
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['name']);
        header('location:index.php');
    }
?>