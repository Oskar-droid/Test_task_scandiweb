<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/shortcut.png">
</head>

<body>
    <div class="container">

        <?php require_once("includes/header.php") ?>

        <main>
            <?php
            $articles = require_once("data/articles.php");
            
            foreach ($articles as $article) { ?>
            <div class="child_content">
                <img src="<?php echo $article["image"] ?>" alt="picture">
                <div class="description">
                    <h4> <?= $article["title"] ?> </h4>
                    <p> <?php echo($article["content"]) ?> </p>
                </div>
            </div>
            <?php } ?>
        </main>

        <?php require_once("includes/footer.php") ?>

    </div>
</body>

</html>