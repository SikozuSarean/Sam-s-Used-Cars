<?php
session_start();
if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: ../Register/login.php"); //if the check session fails redirect to login page
}
?>