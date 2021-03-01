<?php 
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>

    </header>

    <main>
    <?php
    foreach ($response as $key => $values) {?>
        <img src="<?php echo $values['poster']; ?>" alt="">
        <h2><?php echo $values['title']; ?></h2>
        <p><?php echo $values['author']; ?></p>
        <p><?php echo $values['genre']; ?></p>
        <p><?php echo $values['year']; ?></p>

    <?php 
    }
    ?>
    </main>

    <footer>

    </footer>
</body>
</html>