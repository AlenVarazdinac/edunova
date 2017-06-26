<?php include_once '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../include/head.php'; ?>
</head>

<body>

    <!-- ##### NAVIGATION ##### -->
    <?php include_once '../include/header.php'?>


    <!-- ##### NAVIGATION END ##### -->


    <!-- ##### LOGIN FORM ##### -->

    <div class="container">
        <form method="post" action="<?php echo $path;?>authorize.php" class="col-md-6" id="login_form">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username" value="<?php echo isset($_GET["username"]) ? $_GET["username"] : ""; ?>"/>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                placeholder="Enter Your Password"
                class="form-control" />
            </div>

            <button type="submit" id="rl_login_btn" class="btn btn-info center-block btn-block">Log in</button>


            <p id="log_info">
                <?php 
                if(isset($_GET["failed"])){
                    echo "Wrong Username or Password!";
                }
                if(isset($_GET["norights"])){
                    echo "You must Log in first!";
                }
                if(isset($_GET["loggedout"])){
                    echo "You have logged out successfully!";
                } 
                ?>
            </p>
        </form>
    </div>



    <!-- ##### LOGIN FORM END ##### -->


    <!-- ##### FOOTER ##### -->
    <?php include_once '../include/footer.php'; ?>
    <!-- ##### FOOTER END ##### -->

    <!-- ##### SCRIPTS ##### -->
    <?php include_once '../include/scripts.js' ?>

</body>

</html>
