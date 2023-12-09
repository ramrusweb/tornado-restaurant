<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Корзина';
        require "app/include/head.php";
    ?>
<body>
    <?php 
        require "app/include/header.php"; // header
        require "app/include/link_bar.php"; // link bar
        require "app/include/alarm.php"; // alarm
    ?>
        <div class="main-cart"></div>
    		<div class="email-field">
    			<p>Имя: <input type="text" id="ename"></p>
    			<p>Email: <input type="email" id="email"></p>
    			<p>Телефон: <input type="tel" id="ephone"></p>
    			<p><button class="send-email">Заказать</button></p>
    		</div>
	<?php 
        require "app/include/footer.php"; // footer
        require "app/include/scripts.php"; // scripts
    ?>
    <script src="http://tornado/public/js/cart.js"></script> <!-- cart -->
</body>
</html>