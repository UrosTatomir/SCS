
    <?php
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>
    <div class="container-fluid">
        <?php if(empty($register)){ ?>
        <div class="container mt-5 p-5">
            <div class="container mt-5 col-md-6 text-center">
                <h4>Login</h4>
                <form action="routes.php" method="post">
                    <input class="form-control" type="text" name="username" placeholder="username">
                    <br>
                    <input class="form-control" type="password" name="password" placeholder=" password">
                    <br>
                    <input class="btn btn-primary" type="submit" name="pagescs" value="Log in">
                </form>
                &nbsp;
                <!-- skracenica za razmak ili <br>-->
                <h5>Don't have an account</h5>
                <h5>Please - <a class="text-right" href="routes.php?pagescs=showregister">REGISTER</a></h5>
                <?php
                if (!empty($msg)) {   //sve sto saljemo includom $msg ide ovako
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $msg; ?>

                    </div>
                <?php
            } ?>
                <!--posto message sa index strane ide na ovu stranu saljemo preko header Location taj podatak ide get METODOM PA JE OVDE POTREBNO DA GA POKUPIM IZ GET-a -->
                <?php if (!empty($_GET['msg'])) {
                    // $msg = $_GET['msg'];
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        // $msg = $_GET['msg'];
                        echo $_GET['msg'];
                        ?>
                    </div>
                <?php
            } ?>
            </div>

        </div>
    <?php }elseif(!empty($register)&&$register==1){ ?>
    
        <div class="container col-md-7 mt-5 mb-5 p-5 text-center bg-light text-dark">
            <h4>Registration</h4>
            <form action="routes.php" method="POST">
                <input class="form-control" type="text" name="name" placeholder="Enter name">
                <span class="alert-danger">
                    <?php if (array_key_exists('name', $errors)) {
                        echo $errors['name'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="text" name="surname" placeholder="Enter surname">
                <span class="alert-danger">
                    <?php if (array_key_exists('surname', $errors)) {
                        echo $errors['surname'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="text" name="username" placeholder="Enter username">
                <span class="alert-danger">
                    <?php if (array_key_exists('username', $errors)) {
                        echo $errors['username'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="text" name="email" placeholder="Enter email">
                <span class="alert-danger">
                    <?php if (array_key_exists('email', $errors)) {
                        echo $errors['email'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="password" name="password" placeholder="Unesite password">
                <span class="alert-danger">
                    <?php if (array_key_exists('password', $errors)) {
                        echo $errors['password'];
                    } ?>
                </span>
                <br>
                <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm  password">
                <span class="alert-danger">
                    <?php if (array_key_exists('confirmpassword', $errors)) {
                        echo $errors['confirmpassword'];
                    } ?>
                </span>
                <br>
                <input class="btn btn-warning" type="submit" name="pagescs" value="Register">
            </form>
            <?php
        // echo "<span class=alert-warning>$msg</span>";
            if (!empty($msg)) {
                ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $msg;  ?>
            </div>
            <?php 
        } ?>
            <!--super fora zapamtiti-->
    </div>
<?php } ?>
    </div>
   
