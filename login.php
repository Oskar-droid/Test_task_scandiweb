<?php session_start(); ?>
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
            <form action="" method="post">
                <span>Contact Form</span>
                <input type="text" name="username" id="email" placeholder="Username" style="letter-spacing: 1px;">
                <input type="password" name="password" placeholder="Password" style="letter-spacing: 1px;">
                <input type="submit" id="submit" value="Submit" name="submit" style="cursor: pointer; letter-spacing: 2px;">
            </form>
        </main>
        <div class="form_result">

<?php

if (isset($_SESSION['logged_in'])) {
    header('Location: admin.php', true, 302);
    die;    
}

    require_once 'handlers/form_logic.php';

if ($loginHasBeenSubmitted) {
    $result = '';
    if (count($errors) === 0) {
        $_SESSION['logged_in'] = true;
        header('Location: /admin.php', true, 302);
        die;
    } else {
        foreach ($errors as $error) {
            $result = $result . $error . '<br>';
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