<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavBar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $path; ?>index.php">
                <?php echo $appName; ?>
            </a>
        </div>

        <!-- ## Navigation Content ## -->
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a id="home_tab" href="<?php echo $path;?>index.php">Home</a></li>
                <li><a id="about_tab" href="<?php echo $path;?>public/aboutus.php">About us</a></li>

                <?php if(isset($_SESSION["logged"])): ?>
                <li>
                    <a id="dashboard_tab" href="<?php echo $path; ?>private/dashboard.php">Dashboard</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">S1</a></li>
                        <li><a href="#">S2</a></li>
                        <li><a href="#">S3</a></li>
                    </ul>
                </li>

                <?php endif; ?>




            </ul>



            <!-- ## Right Content ## -->
            <?php if(!isset($_SESSION["logged"])): ?>
            <form class="navbar-form navbar-right" action="<?php echo $path; ?>public/login.php">
                <div class="form-group">
                    <input type="submit" value="Log in" class="btn btn-block btn-primary"></input>

                </div>
            </form>
            <?php else: ?>
            <form class="navbar-form navbar-right" action="<?php echo $path; ?>public/logout.php">
                <div class="form-group">
                    <input type="submit" value="Log out" class="btn btn-block btn-primary"></input>
                </div>
            </form>
            <?php endif; ?>

        </div>

    </div>
</nav>
