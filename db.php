<?php
$servername = "sql311.infinityfree.com";
$username = "if0_40180786";
$password = "kea9RNNfFU0jl"; 
$database = "if0_40180786_sqlfacebookclone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
