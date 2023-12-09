<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Меню - Десерты &#124; ресторан «Торнадо» Кизляр';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link_bar
        require "../app/include/alarm.php"; // alarm
        $desserts = mysqli_query($connection, "SELECT * FROM `desserts`");
    ?>
    <div class="container">
        <div class="row">
            <?php
                while( $desserts_article = mysqli_fetch_assoc($desserts) )
                {
            ?>
                    <div class="col-4">
                        <article id="article">
                            <a href="#">
                                <img src="<?php echo $desserts_article['image']; ?>">
                            </a>
                            <a class="category text-uppercase f12px" href="http://tornado/menu/desserts.php"><?php echo $desserts_article['category_desserts']; ?><br></a>
                            <a class="title f18px" href="#"><?php echo $desserts_article['title']; ?></a>
                            <div class="purchase">
                                <p class="price f24px font__700"><?php echo $desserts_article['price']; ?> &#8381;</p>
                                <a class="buy" href="http://tornado/basket.php"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </article>
                    </div>
                <?php
                } 
                ?>
        </div>
    </div>
    <?php
        require "../app/include/about_hotter.php"; // about_hotter
        require "../app/include/footer.php"; // footer
        require "../app/include/scripts.php"; // scripts
    ?>
</body>
</html>