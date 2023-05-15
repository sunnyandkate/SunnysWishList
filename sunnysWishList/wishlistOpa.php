<?php $title = "Sunnys Wish List"; ?>
<?php include "includes/db_connect.php"; ?>
<?php include "includes/header_admin.php"; ?>

<?php


?>
<div class="container">
    <form action="" method='post'>
        <div class="header-wishlist">
            <h1>Sunnys Wish List</h1>
        </div>
        <div class="wishlist-container">
            <div class="available-items-container">
                <?php

                //show products

                $query = "SELECT * FROM sunnysWishListOpa ";
                $select_products_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_products_query)) {
                    $product_id = $row['product_id'];
                    $name = $row['name'];
                    $image = $row['image'];
                    $link = $row['link'];
                ?>
                    <div class="product-box">
                        <div class="name">
                            <h4><?php echo $name; ?></h4>
                        </div>

                        <img class="post-img" src="images/<?php echo $image; ?>" alt="" />
                        <div class="link"><span><a href="<?php echo $link; ?>" target="_blank">link zum Produkt</a></span></div>
                        <a class="select-item" href='selectPresent.php?p_id=<?php echo $product_id; ?>'>auswaehlen</a>
                    </div>
                <?php }
                ?>
            </div>
            <hr>
            <div class="selected-items-container">
                <?php

                //show selected products

                $query = "SELECT * FROM selectedItem ";
                $selected_item_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($selected_item_query)) {
                    $item_id = $row['item_id'];
                    $item_name = $row['item_name'];
                    $item_image = $row['item_image'];
                    $item_link = $row['item_link'];
                ?>
                    <div class="selected-box">
                        <p>not available</p>
                        <div class="name"><?php echo $item_name; ?></div>

                        <img class="post-img" src="images/<?php echo $item_image; ?>" alt="" />
                        <!--
                        <div class="link"><span><a href="<?php echo $item_link; ?>" target="_blank">link to product</a></span></div>
                -->
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </form>
    <p class="logout"><a href="includes/logout.php">logout</a></p>
    <?php include "includes/footer.php"; ?>