<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "scandiweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}