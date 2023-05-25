<!DOCTYPE html>
<html lang="ru">

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
            include './db_connect.php';

            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="child_content">
                        <div class="description">
                            <h4> <?php echo $row["name"]; ?> </h4>
                            <p> <?php echo $row["price"] . '$'; ?> </p>
                            <p> <?php echo $row["size"]; ?> </p>
                            <div id="bottom_handler">
                                <form action="delete.php" method="POST" class="moderating_buttons" style="all: unset;">
                                    <input type="checkbox" id="check" name="check" value="" style="margin: 6px 0 0 3px;">
                                </form>
                                <p id="key" style="padding: 0; font-size: 18px;"> <?php echo $row["id"]; ?> </p> 
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "Нет данных";
            }
            ?>
            
        </main>

        <?php require_once("includes/footer.php") ?>

    </div>
</body>

</html>