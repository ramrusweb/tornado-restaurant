<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Уютный ресторан «Торнадо» в Кизляре — сеть семейных кафе-ресторанов';
        require "app/include/head.php";
    ?>
<body>
    <?php 
        require "app/include/header.php"; // header
        require "app/include/link_bar.php"; // link bar
        require "app/include/alarm.php"; // alarm
        require "app/include/slider.php"; // slider
        require "app/include/favorite_content.php"; // favorite dishes
        require "app/include/about.php"; // about
        require "app/include/footer.php"; // footer
        require "app/include/scripts.php"; // scripts
    ?>
</body>
</html>