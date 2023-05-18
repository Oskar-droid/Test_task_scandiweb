<?php

$articleHasBeenSubmitted = false;
$errors = [];


if (isset($_POST['submit-article'])) {
    $articleHasBeenSubmitted = true;
    
    if (!isset($_POST['title']) || is_array($_POST['title']) || $_POST['title'] === '') {
        $errors[] = 'Wrong or empty title has been provided.';
    }
    
    if (!isset($_POST['content']) || is_array($_POST['content']) || $_POST['content'] === '') {
        $errors[] = 'Wrong or empty content has been provided.';
    }
    if (!isset($_FILES['image']) || 
        $_FILES['image']['error'] !== UPLOAD_ERR_OK || 
        !in_array($_FILES['image']['type'], ['image/png', 'image/jpeg', 'image/webp'], true)
    ) {
        $errors[] = 'Wrong or empty image has been provided.';
    }

    if (count($errors) === 0) {

        $articles = require_once 'data/articles.php';
        
        $newImageName = uniqid('', true) . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $newImagePath = './img/' . $newImageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath);
        
        $article = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $newImagePath,
        ];
        
        array_unshift($articles, $article);
        file_put_contents('data/articles.json', json_decode($articles));

        header('Location: ../index.php', true, 302);
    }
}