<?php
session_start();
?>
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
            <a class="navbar-brand" href="base.php"><span><i class="fas fa-dragon"></i></span> Club Management System</a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                <?php
                if (!isset($_SESSION['email'])) {
                    $_SESSION['msg'] = "You must log in first";
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php"><span><i class="fas fa-sign-in-alt"></i>..</span>Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="SignUp.php"><i class="fas fa-user-plus">..</i>Sign-UP</a>
                    </li>

                    <?php
                }
                else {
                    ?>
                    <?php
                    if(strval($_SESSION['email'])=="admin@gmail.com"){

                        ?>

                        <li class="nav-item">
                        <a class="nav-link" href="adminreg.php"><span><i class="fas fa-chess-king"></i></span>Register Candidates</a>
                    </li>
                <?php
                    }
                    ?>


                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><span><i class="fas fa-user-astronaut"></i></span>Profile</a>
                    </li>


                    <li class="nav-item dropdown"  >
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" ><span><i class="fas fa-vote-yea"></i></span>Vote</a>

                        <div class="dropdown-menu " style="background-color: #212529;">
                            <a class="dropdown-item" style="color: cadetblue;" href="votego.php"><span><i class="fas fa-caret-right"></i></span> Cast Vote</a>
                            <a class="dropdown-item"  style="color: cadetblue;" href="result.php"><span><i class="fas fa-caret-right"></i></span> Results</a>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="log-out.php" ><i class="fas fa-user-times"></i>Logout</a>
                    </li>


                    <?php
                }
                ?>

            </ul>
        </div>
    </nav>
<?php
?>