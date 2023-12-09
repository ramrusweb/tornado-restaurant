<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Личный кабинет';
        require "app/include/head.php";
    ?>
<body>
    <?php // header
        require "app/include/header.php";
    ?>
	<section class="cab">
		<h4 style="text-align: center; margin-top: 10px;">Личный кабинет</h4>
	</section>
    <?php 
        require "app/include/footer.php"; // footer
        require "app/include/scripts.php"; // scripts
    ?>
</body>
</html>