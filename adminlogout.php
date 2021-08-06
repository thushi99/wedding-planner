<?php
    session_start();
    session_destroy();
    unset($_SESSION['adminUsername']);
    header("location:adminlogin.php");
?>