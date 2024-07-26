<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container-fluid">

        <div class="row  d-flex  justify-content-center  mt-3">
            <div class="col-md-4  col-sm-12">
                <form class="mt-3 aline-item-center form p-2 mb-3" action="" method="POST">
                    <div class="text text-center text-dark mb-3">
                        <h3>Contact Us</h3>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="name">Name</span>
                        <input type="text" name="name" class="m-1 p-2" placeholder="Name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="email">Email</span>
                        <input type="email" name="email" class="m-1 p-2" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text m-1 p-2" id="message">Message</span>
                        <textarea name="message" rows="4" required></textarea>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" name="submit" class="btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'js.php'; ?>
</body>

</html>