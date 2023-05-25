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
            <form action="./handlers/delete_logic.php" method="post" enctype="multipart/form-data">
                <span>Admin Panel</span>
                <input type="text" name="id" id="title" placeholder="Product ID">
                <input type="submit" id="submit" value="Submit" name="submit-article" style="cursor: pointer;">
            </form>
        </main>
        <div class="form_result">
        </div>
    </div>
</body>

</html>