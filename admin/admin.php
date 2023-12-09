<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Уютный ресторан «Торнадо» в Кизляре — сеть семейных кафе-ресторанов';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link bar
        require "../app/include/alarm.php"; // alarm
    ?>
		<h2>Товар</h2>
		<p>Имя: <input type="text" id="gname"></p>
		<p>Стоимость: <input type="text" id="gcost"></p>
		<p>Описание: <textarea id="gdescr"></textarea></p>
		<p>Изображение: <input type="text" id="gimg"></p>
		<p>Порядок: <input type="text" id="gorder"></p>
		<input type="hidden" id="gid">
		<button class="add-to-db">Обновить</button>
		<?php
        require "../app/include/footer.php"; // footer
        require "../app/include/scripts.php"; // scripts
    ?>
    <script src="http://tornado/admin/public/js/admin.js"></script> <!-- admin -->
</body>
</html>