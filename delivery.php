<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Доставка &#124; ресторан «Торнадо» Кизляр';
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
            <div class="col">
                <div id="delivery">
                    <p class="breadcrumbs">
                        <a href="/">Торнадо</a> &rarr; <span>Условия доставки</span>
                    </p>
                        <h1 class="f24px font__700">Доставка в городе Кизляр</h1>
                    <section class="delivery__delivery">
                        <h3 class="f18px font__700">Предлагаем Вам доставку блюд и напитков из “Торнадо”.<br>
                            Аккуратно упакуем заказ и доставим его до Вашего адреса.</h3>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php 
        require "http://tornado/app/include/footer.php"; // footer
        require "http://tornado/app/include/scripts.php"; // scripts
    ?>
</body>
</html>