<?php 
include 'admin/error.php';
// Include database connection file
include_once('admin/controller/database/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agrimart</title>
    <?php include 'css.php'; ?>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="container ">
        <!-- <div class="row mt-1">
            <?php include 'slider.php'; ?>
        </div> -->
        <div class="row mt-1">

            <?php
			$sql = "SELECT * FROM products";
			$res = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($res)) {
				?>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="card m-1 text-left p-1 ms-2">
                    <p class="text-center">
                        <img src="<?php echo $row["product_image"]; ?>" height="80px" width="80px">
                    </p>
                    <p>
                        <?php echo 'product name: '. $row["product_name"]; ?>
                    </p>
                    <p>
                        <?php echo 'product description: '. $row["product_description"]; ?>
                    </p>
                    <p>
                        <?php echo 'product price: '. $row["product_price"]; ?>
                    </p>

                    <p>
                        <?php echo 'create date: '. $row["created_at"]; ?>
                    </p>
                    <form action="login.php" method="POST" class="text-center">
                        <button class="btn m-3" type="submit" name="product_id"
                            value="<?php echo $row["product_id"]; ?>">addtocart</button>
                    </form>
                </div>

            </div>
            <?php }
			?>
        </div>

    </div>
    <?php include 'footer.php';?>

    <?php include 'js.php'; ?>
</body>

</html>