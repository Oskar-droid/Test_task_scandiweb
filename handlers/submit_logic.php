<?php
require '../db_connect.php';
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    
    $sql = "INSERT INTO products (name, price, size) VALUES ('$name', '$price', '$size')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://scandiweb/index.php");
        exit;
    } else {
        echo "Ошибка добавления элемента в базу данных: " . $conn->error;
    }