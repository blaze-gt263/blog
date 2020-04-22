<?php include('path.php'); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>blog</title>

    <script src="https://kit.fontawesome.com/5d6fb7f694.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="asserts/css/style.css" />
</head>

<body>
    <?php include(ROOT_PATH . '/app/includes/header.php'); ?>

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

            <!-- <div class="msg error">
                <li>Username required</li>
            </div> -->

            <div>
                <label for="">Name</label>
                <input type="text" name="name" class="text-input">
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" name="email" class="text-input">
            </div>

            <div>
                <label for="">password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <label for="">password</label>
                <input type="password" name="passwordconf" class="text-input">
            </div>

            <div>

                <button class="btn btn-big" name="register-btn" type="submit">register</button>
            </div>

            <div>
                <a href="<?php echo BASE_URL . '/login.php' ?>">Or sign in</a>
            </div>
        </form>
    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>