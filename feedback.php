<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>

    <?php include 'css.php';?>
</head>

<body>
    <?Php include 'menu.php';?>
    <div class="row  d-flex  justify-content-center  mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-2">
                    <div class="card-header text text-dark text-center">
                        <h3>Feedback</h3>
                    </div>

                    <div class="card-body text text-dark">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" class="form-control mb-2" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="mb-2">Email</label>
                                <input type="email" class="form-control mb-2" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message" class="mb-2">Message</label>
                                <textarea class="form-control mb-2" id="message" name="message" rows="5"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-center m-3">Submit Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'js.php';?>
</body>

</html>