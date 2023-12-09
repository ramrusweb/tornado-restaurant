<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Доставка сетов в Кизляре &#124; Заказать сет роллов на дом из ресторана «Торнадо» недорого';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link_bar
        require "../app/include/alarm.php"; // alarm
        $sets = mysqli_query($connection, "SELECT * FROM `sets`");
    ?>
    <div class="container">
        <div class="row">
            <?php
                while( $sets_article = mysqli_fetch_assoc($sets) )
                {
            ?>
                    <div class="col-4">
                        <article id="article">
                            <a href="#">
                                <img src="<?php echo $sets_article['image']; ?>">
                            </a>
                            <a class="category text-uppercase f12px" href="http://tornado/menu/sets.php"><?php echo $sets_article['category_sets']; ?><br></a>
                            <a class="title f18px" href="#"><?php echo $sets_article['title']; ?></a>
                            <div class="purchase">
                                <p class="price f24px font__700"><?php echo $sets_article['price']; ?> &#8381;</p>
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
        require "../app/include/about_sets.php"; // about_sets
        require "../app/include/footer.php"; // footer
        require "../app/include/scripts.php"; // scripts
    ?>
</body>
</html>