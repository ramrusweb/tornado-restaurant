<?php // configuration
    require "config.php";
?>
<footer id="footer" class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="footer__links" class="f15px font__400 text-center">
                    <?php
                        echo '<a href="/">На главную</a>' .
                            '<a href="http://tornado/delivery.php">Условия доставки</a>' .
                            '<a href="http://tornado/order.php">Условия бронирования</a>' .
                            '<a href="http://tornado/reviews.php">Отзывы</a>' .
                            '<a href="http://tornado/contacts.php"></a>';
                    ?>
                        <a href="tel:+79280511295" class="number c__26x3 f24px font__700">
                            <?php echo '<a href="#"><i class="fas fa-phone"></i><span class="call">Позвонить</span></a>'; ?>
                        </a>
                </div>
            </div>
        </div>
    </div>  
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <span class="footer__copy c__26x3">
                    &copy; &#171;<?php echo $title = 'Ресторан Торнадо' . '&#187; 2017-' . date('Y'); ?>
                </span>
            </div>
        </div>
    </div>
</footer>
    <script src="http://tornado/public/js/footer.js"></script> <!-- модальное окно -->