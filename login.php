<?php
   // include 'admin/error.php';
  session_start();
 if (isset($_SESSION['ID'])) {
     header("Location:dashboard.php");
     exit();
  }
  //Include database connectivity
    
  include_once('admin/controller/database/db.php');
  
  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $conn->real_escape_string($_POST['username']);
      $password = $conn->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $sql  = "SELECT * FROM users WHERE username = '$username'";

        $result =mysqli_query($conn,$sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['user_role'];
            $_SESSION['USERNAME'] = $row['username'];
            if(0==$row['user_role']){
            header("Location:admin/index.php");
            }elseif(1==$row['user_role']){
                header("Location:admin/index.php");
            }elseif(2==$row['user_role']){
                header("Location:index.php");
            }
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'menu.php';?>
    <div class="container-fluid   ">

        <div class="row  d-flex  justify-content-center  mt-3">
            <div class="col-md-4  col-sm-12">
            <div class="d-flex  justify-content-center  mt-3">
							<img class="logo" src="asset/css/image/admin-logo.png" alt="" srcset="">
						</div>
                <form class="mt-3 aline-item-center form p-2 mb-3" action="" method="POST">
                    <div class="text text-center text-dark">
                        <h3>Login</h3>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="Email"><i class="bi bi-envelope-at"></i></span>
                        <input type="email" name="email" class="m-1 p-2" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="username"><i class="bi bi-person-circle"></i></span>
                        <input type="text" name="username" class="m-1 p-2" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="password"><i class="bi bi-shield-lock"></i></span>
                        <input type="password" name="password" class="m-1 p-2" placeholder="Password">
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" name="submit" class="btn">login</button>
                    </div>
                    <div class="mb-3 text-center text-black">
                        <h3>You Have No Account TO</h3>
                    </div>

                    <div class="mb-3 text-center">
                        <a href="signup.php" type="submit" class="btn">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'css.php'; ?>

</body>

</html>