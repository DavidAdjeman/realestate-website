<?php
// this file is created to check if 'the Keyword is captured'

/* --------------------------- Starting the Session --------------------------- */
session_start();
if(!isset($_SESSION['Keyword'])){          // $_SESSION is a way of creating a variable to hold a value
    header('Location: ../index.php');       // this line redirects to index page
    exit();
}

?>
