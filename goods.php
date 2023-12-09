<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Мои желания';
        require "app/include/head.php";
    ?>
<body>
    <?php 
        require "app/include/header.php"; // header
        require "app/include/link_bar.php"; // link bar
        require "app/include/alarm.php"; // alarm
    ?>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="goods-out"></div>
                </div>
            </div>
        </div>
    <?php
        require "app/include/footer.php"; // footer
        require "app/include/scripts.php"; // scripts
    ?>
    <script src="http://tornado/public/js/goods.js"></script> <!-- goods -->
</body>
</html>