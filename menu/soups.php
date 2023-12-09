<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Меню - Супы &#124; ресторан «Торнадо» Кизляр';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link_bar
        require "../app/include/alarm.php"; // alarm
        $soups = mysqli_query($connection, "SELECT * FROM `soups`");
    ?>
    <div class="container">
        <div class="row">
            <?php
                while( $soups_article = mysqli_fetch_assoc($soups) )
                {
            ?>
                    <div class="col-4">
                        <article id="article">
                            <a href="#">
                                <img src="<?php echo $soups_article['image']; ?>">
                            </a>
                            <a class="category text-uppercase f12px" href="http://tornado/menu/soups.php"><?php echo $soups_article['category_soups']; ?><br></a>
                            <a class="title f18px" href="#"><?php echo $soups_article['title']; ?></a>
                            <div class="purchase">
                                <p class="price f24px font__700"><?php echo $soups_article['price']; ?> &#8381;</p>
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
        require "../app/include/footer.php"; // footer
        require "../app/include/scripts.php"; // scripts
    ?>
</body>
</html>