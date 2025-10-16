<?php

$servername = "127.0.0.1";      
$username   = "root";          
$password   = "";               
$dbname     = "facebook_clone"; 

$conn = new mysqli("127.0.0.1", "root", "", "facebook_clone", 3307);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $surname   = $_POST['surname'] ?? '';
    $dob_day   = $_POST['dob-day'] ?? '';
    $dob_month = $_POST['dob-month'] ?? '';
    $dob_year  = $_POST['dob-year'] ?? '';
    $dob       = $dob_year . '-' . $dob_month . '-' . $dob_day;
    $gender    = $_POST['gender'] ?? '';
    $email     = $_POST['email'] ?? '';
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (firstname, surname, dob, gender, email, password)
            VALUES ('$firstname', '$surname', '$dob', '$gender', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pendaftaran berhasil!');
                window.location.href='login.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

