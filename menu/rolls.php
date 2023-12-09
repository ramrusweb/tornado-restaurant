<?php // configuration
    require "../app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Заказ и доставка роллов в Кизляре &#124; Заказать роллы на дом из ресторана «Торнадо» недорого';
        require "../app/include/head.php";
    ?>
<body>
    <?php 
        require "../app/include/header.php"; // header
        require "../app/include/link_bar.php"; // link bar
        require "../app/include/alarm.php"; // alarm
        // $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE category_id = '1'");
    ?>
    <div class="container">
        <div class="row">
            <?php
                // while( $goods_art = mysqli_fetch_assoc($goods) )
                // {
            ?>
                    <div class="col-4">
                        <div class="goods-out">
                            <!-- <a href="#">
                                <img src="<?php // echo $goods_art['img']; ?>">
                            </a>
                            <a class="title f18px" href="#"><?php // echo $goods_art['name']; ?></a>
                            <div class="purchase">
                                <p class="cost f24px font__700"><?php // echo $goods_art['cost']; ?> &#8381;</p> -->
                                <!-- button - add-to-cart - main.js -->
                            <!-- </div> -->
                        </div>
                    </div>
                <?php
                // } 
                ?>
        </div>
    </div>
    <?php
        require "../app/include/footer.php"; // footer
        require "../app/include/scripts.php"; // scripts
    ?>
</body>
</html>