<?php $title = "Selected Item"; ?>
<?php include "includes/db_connect.php"; ?>
<?php include "includes/header_admin.php"; ?>

<div class="container">
    <p class="confirm-select">Möchtest du dieses Geschenk wählen? Zum Kauf kannst du über den Link auf einen Online Shop kommen. Wenn du
        auf Submit drückst wird das Geschenk von der Wunschliste genommen.
    </p>

    <div class="select-item-box-container">
        <?php

        if (isset($_GET['p_id'])) {

            $product_id =  $_GET['p_id'];
        }

        $query = "SELECT * FROM sunnysWishListOpa WHERE product_id = $product_id ";

        $select_all_products_query = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_all_products_query)) {

            $name = $row['name'];
            $image = $row['image'];
            $link = $row['link'];

        ?>

            <div class="select-item-box">
                <form action="" method="post" role="form">

                    <div class="name"><?php echo $name; ?></div>

                    <img class="post-img" src="images/<?php echo $image; ?>" alt="" />
                    <div class="link"><span><a href="<?php echo $link; ?>" target="_blank">link zum Produkt</a></span></div>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>

                </form>
            </div>

        <?php  } ?>
        <?php


        if (isset($_POST['submit'])) {
            $product_id = $_GET['p_id'];


            $query = "INSERT INTO selectedItem (item_id, item_name, item_image, item_link) ";

            $query .= "SELECT product_id, name, image, link FROM sunnyswishlistOpa WHERE product_id = $product_id ";


            $create_query = mysqli_query($connection, $query);

            $query = "DELETE FROM sunnysWishList WHERE product_id = $product_id ";
            $delete_query = mysqli_query($connection, $query);
            header("Location:wishlistOpa.php");
        }

        ?>
    </div>

    <p class="back"><a href="wishlistOpa.php">zurueck</a></p>


    <?php include "includes/footer.php"; ?>