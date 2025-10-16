<?php
$servername = "sql311.infinityfree.com";
$username = "if0_40180786";
$password = "kea9RNNfFU0jl"; 
$database = "if0_40180786_sqlfacebookclone";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

