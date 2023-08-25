<?php
// Creating Variables to hold connection string sectors

$host       = "localhost";          // name of the server
$user       = "root";
$Password   = "";
$database   = "search-database";

// //creating connection string --- Chat GPT
// $conn = new mysqli($host, $user, $Password, $database);

// //checking connection state
// if ($conn->connect_error){

//     die("Failed to connect to Msql Database    :  " . $conn->connect_error);
// } 

//Creating connection string
$conn = mysqli_connect($host, $user, $Password, $database);

//checking connection state
if (mysqli_connect_errno()){

    echo "Failed to connect to Msql Database    :  " . mysqli_connect_error();
}
?>
