<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/shortcut.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" style="box-shadow: none;">

        <?php require_once("includes/header.php") ?>

        <main>
            <form action="" method="post" enctype="multipart/form-data">
                <span>Admin Panel</span>
                <input type="text" name="name" id="title" placeholder="Product Name">
                <input type="text" name="price" placeholder="Price">
                <input type="size" name="size" placeholder="Size">
                <input type="submit" id="submit" value="Submit" name="submit-article" style="cursor: pointer;">
            </form>
        </main>
        <div class="form_result">

        <?php

        require_once("handlers/submit_logic.php");

        if ($articleHasBeenSubmitted) {

        $result = '';

        if (count($errors) === 0) {
            
            header('Location: /index.php', true, 302);
            die;
        
        } else {
        
            foreach ($errors as $error) {
                    $result = $result . $error . "<br>";
            }
                $result = $result . '<br>';    
        }
        echo $result;
    }   
                ?>
        </div>
    </div>
</body>

</html>