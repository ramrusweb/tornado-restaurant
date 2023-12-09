<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Салаты в ресторане «Торнадо» Кизляр &#124; Заказать салаты с доставкой';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link_bar
        require "../app/include/alarm.php"; // alarm
        $salads = mysqli_query($connection, "SELECT * FROM `salads`");
    ?>
    <div class="container">
        <div class="row">
            <?php
                while( $salads_article = mysqli_fetch_assoc($salads) )
                {
            ?>
                    <div class="col-4">
                        <article id="article">
                            <a href="#">
                                <img src="<?php echo $salads_article['image']; ?>">
                            </a>
                            <a class="category text-uppercase f12px" href="http://tornado/menu/salads.php"><?php echo $salads_article['category_salads']; ?><br></a>
                            <div class="title">
                                <a class="title_a f18px" href="#"><?php echo $salads_article['title']; ?></a>
                            </div>
                            <div class="purchase">
                                <div class="price">
                                    <p class="price_p f24px font__700"><?php echo $salads_article['price']; ?> &#8381;</p>
                                </div>
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