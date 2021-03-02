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