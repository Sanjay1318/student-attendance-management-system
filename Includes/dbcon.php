<?php

$host = "localhost";
$user = "root";
$password = "";              // empty, because we reset MySQL
$database = "attendancemsystem";  // exact DB name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
