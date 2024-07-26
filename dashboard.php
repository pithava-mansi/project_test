<?php 
include 'admin/error.php';
session_start();
// Include database connection file
include_once('admin/controller/database/db.php');
if (!isset($_SESSION['ID'])) {
    header("Location:index.php");
    exit();
}
if(2==$_SESSION['ROLE']){
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saustudy</title>
	<?php include 'css.php'; ?>
</head>

<body>
	<?php include 'menu.php'; ?>
<!-- 
	<div class="container ">
		<div class="row mt-1">
			<?php include 'slider.php'; ?>
		</div>
		<div class="row mt-1">

			<?php
			$sql = "SELECT * FROM product";
			$res = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($res)) {
				?>
				<div class="col-lg-4 col-md-4 col-sm-12 ">
					<div class="card m-1 text-center p-1">
						<h4>
							<?php echo $row["product_name"]; ?>
						</h4>
						<h4>
						<?php echo $row["product_description"]; ?>
						</h4>
						<h4>
						<?php echo $row["product_price"]; ?>
						</h4>
						<h4>
							<img src="<?php echo $row["product_image"]; ?>" height="80px" width="80px">
						</h4>
						<h4>
						<?php echo $row["create_at"]; ?>
						</h4>
						<form action="addtocart.php" method="POST">
							<button class="btn m-3" type="submit" name="product_id"
								value="<?php echo $row["product_id"]; ?>">details</button>
						</form>
					</div>

				</div>
			<?php }
			?>
		</div>
       
	</div> -->
    <?php include 'footer.php'; ?>
	

	<?php include 'js.php'; ?>
</body>

</html>
        <?php }else{
            session_destroy();
            header("Location:index.php");
        }
        
        ?>