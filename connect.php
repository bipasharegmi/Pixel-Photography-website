<?php

$servername = 'localhost';
$username = 'root';
$password = 'Bipasha@123';
$dbname = 'website';


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo('Sucessfully connected to the databse');
}

