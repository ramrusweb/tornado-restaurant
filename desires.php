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
        <div class="goods-out"></div>
    <?php
        require "app/include/footer.php"; // footer
        require "app/include/scripts.php"; // scripts
    ?>
    <script src="http://tornado/public/js/desires.js"></script> <!-- desires -->
</body>
</html>