<?php 
include 'error.php';
session_start();
// Include database connection file
include_once('controller/database/db.php');
if (!isset($_SESSION['ID'])) {
    include 'logout.php';
    exit();
}
if(0==$_SESSION['ROLE']){
    include 'controller/user_controller.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container ">

        <div class="row mt-1">
            <?php
			 $data = $obj->view();
             while ($row = mysqli_fetch_assoc($data)){
				?>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="user-card m-1 text-center p-1">
                    <h5>
                        <?php echo 'username: '.$row["username"]; ?>
                    </h5>
                    <div>
                        <p><?php echo 'fname: '.$row["fname"]; ?></p>
                        <p><?php echo 'lname: '.$row["lname"]; ?></p>
                        <p><?php echo 'email: '.$row["email"]; ?></p>
                        <form action="#" method="POST">
                            <input type="number" value="<?php echo $row['id']; ?>" name="user_id" hidden>

                            <button type="button" class="btn card-edit" data-bs-toggle="modal"
                                data-bs-target="#updatedata"><i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn card-delete" type="submit" name="delete"
                                onclick="return confirm('are you sure to delete')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </div>

                </div>

            </div>
            <?php }
			?>
        </div>


    </div>
    <?php include 'footer.php'; ?>


    <?php include 'js.php'; ?>
</body>

</html>

<?php }else{
            
            include 'logout.php';
        }
        
        ?>