<?php
require '../db_connect.php';
    $id = $_POST['id'];
    
    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://scandiweb/index.php");
        exit;
    } else {
        echo "Ошибка добавления элемента в базу данных: " . $conn->error;
    }