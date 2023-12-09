<?php
    require "config.php"; // configuration
    $categories = mysqli_query($connection, "SELECT * FROM `menu`");
?>

<div class="container">
    <div class="row">
        <div class="col">
            <nav>
                <ul class="d-flex link-bar">
                    <?php
                        while( $menu = mysqli_fetch_assoc($categories) )
                        {
                    ?>
                    <li><a href="<?php echo $menu['url']; ?>"><?php echo $menu['title']; ?></a></li>
                        <?php
                        } 
                        ?>
                </ul>
            </nav>
        </div>
    </div>
</div>