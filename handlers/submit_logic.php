<?php

$articleHasBeenSubmitted = false;
$errors = [];


if (isset($_POST['submit-article'])) {
    $articleHasBeenSubmitted = true;
    
    if (!isset($_POST['name']) || is_array($_POST['name']) || $_POST['name'] === '') {
        $errors[] = 'Wrong or empty name has been provided.';
    }
    
    if (!isset($_POST['price']) || is_array($_POST['price']) || $_POST['price'] === '') {
        $errors[] = 'Wrong or empty price has been provided.';
    }
    if (!isset($_POST['size']) || is_array($_POST['size']) || $_POST['size'] === '') {
        $errors[] = 'Wrong or empty size has been provided.';
    }

    if (count($errors) === 0) {

        $articles = require_once 'data/articles.php';
        
        $newImageName = uniqid('', true) . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $newImagePath = './img/' . $newImageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath);
        
        $article = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'size' => $_POST['size']
        ];
        
        array_unshift($articles, $article);
        file_put_contents('data/articles.json', json_encode($articles));

        header('Location: ../index.php', true, 302);
    }
}