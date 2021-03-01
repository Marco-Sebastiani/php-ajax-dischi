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
    <title>Album dischi musicali php</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="container box-header">
                <div class="box-img">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="box-text">
                    <h3>Album musicale</h3>
                </div>
            </div>
        </header>
    
        <main>
            <div class="container">
                <div class="box-album">
                    
                    
                        <?php
                        foreach ($response as $key => $values) {?>
                            <div class="box-item-album">
                                <div class="box-img">
                                    <img src="<?php echo $values['poster']; ?>" alt="<?php echo $values['title']; ?>">
                                </div>
                                <div class="box-title">
                                    <h3 class="m-t-20"><?php echo $values['title']; ?></h3>
                                </div>
                                <div class="box-info">
                                    <p><?php echo $values['author']; ?></p>
                                    <p><?php echo $values['year']; ?></p>
                                </div>
                            </div>
                        <?php 
                        }
                        ?>
                </div>
            </div>
        </main>
    
        <footer>
            <div class="container">
                <div class="footer-box">
                    <div class="box-left">
                        <ul>
                            <li>
                                <a href="#">Spotify</a>
                            </li>
                            <li>
                                <a href="#">Tutto su Spotify</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Termini</a>
                            </li>
                        </ul>
                    </div>

                    <div class="box-right">
                        <small>Marco Sebastiani &copy;</small>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>