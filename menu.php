<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Доставка еды на дом и в офис в Кизляре &#124; Заказ домашней еды из ресторана «Торнадо» &#124; Меню';
        require "app/include/head.php";
    ?>
<body>
    <?php
        require "app/include/header.php"; // header
        require "app/include/link_bar.php"; // link bar
        require "app/include/alarm.php"; // alarm
    ?>
<?php
    $categories = mysqli_query($connection, "SELECT * FROM `menu`");
?>
    <div class="container">
        <div class="row">
            <?php
                while( $menu = mysqli_fetch_assoc($categories) )
                {
            ?>
                    <div class="col-4">
                        <article id="menu">
                            <a href="<?php echo $menu['url']; ?>">
                                <img src="<?php echo $menu['image']; ?>">
                                    <h3 class="menu__articles-title">
                                        <?php echo $menu['title']; ?>
                                </h3>
                            </a>
                        </article>
                    </div>
                <?php
                } 
                ?>
        </div>
    </div>
    <?php
        require "app/include/about_menu.php"; // about menu
        require "app/include/footer.php"; // footer
        require "app/include/scripts.php"; // scripts
    ?>
</body>
</html>