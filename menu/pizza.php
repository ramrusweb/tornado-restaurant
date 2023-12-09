<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Заказ и доставка пиццы в Кизляре &#124; Заказать пиццу на дом онлайн из ресторана «Торнадо» недорого';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link_bar
        require "../app/include/alarm.php"; // alarm
        $pizza = mysqli_query($connection, "SELECT * FROM `pizza`");
    ?>
    <div class="container">
        <div class="row">
            <?php
                while( $pizza_article = mysqli_fetch_assoc($pizza) )
                {
            ?>
                    <div class="col-4">
                        <article id="article">
                            <a href="#">
                                <img src="<?php echo $pizza_article['image']; ?>">
                            </a>
                            <a class="category text-uppercase f12px" href="http://tornado/menu/pizza.php"><?php echo $pizza_article['category_pizza']; ?><br></a>
                            <a class="title f18px" href="#"><?php echo $pizza_article['title']; ?></a>
                            <div class="purchase">
                                <p class="price f24px font__700"><?php echo $pizza_article['price']; ?> &#8381;</p>
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