<?php
include 'admin/error.php';

include 'admin/controller/database/db.php';
include 'admin/controller/user_controller.php';
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
    <div class="container-fluid   ">

        <div class="row  d-flex  justify-content-center  mt-3">
            <div class="col-md-4  col-sm-12">

                <form class="mt-3 justify-content-center form mb-3  p-2" action="" method="POST">
                    <div class="text text-center text-dark">
                        <h3>Register Here</h3>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="basic-addon1"><i
                                class="bi bi-person-circle"></i></span>
                        <input type="text" name="fname" class=" m-1 p-2" placeholder="Name" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="basic-addon1"><i
                                class="bi bi-person-circle"></i></span>
                        <input type="text" name="lname" class="m-1 p-2" placeholder="Surname" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text viral-card-2 m-1 p-2" id="Email"><i
                                class="bi bi-envelope-at"></i></span>
                        <input type="email" name="email" class="m-1 p-2" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="basic-addon1"><i
                                class="bi bi-person-circle"></i></span>
                        <input type="text" name="username" class="m-1 p-2" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="basic-addon1"><i
                                class="bi bi-shield-lock"></i></span>
                        <input type="password" name="password" class="m-1 p-2" placeholder="Password" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="role" class="m-1 p-2" value="2" hidden>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" name="submit" class="btn col-3">Sign Up</button>
                    </div>
                    <div class="mb-3 text-center text-black">
                        <h4>you have alrady Account to: <a href="login.php" type="submit" class="btn">Login</a> </h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'js.php'; ?>
</body>

</html>