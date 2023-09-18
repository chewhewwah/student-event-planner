<?php include 'webtemplate1header.php'; ?>
<?php if (isset($_SESSION["useremail"])){
    header("Location: $roothtml/events.php");
}
?>
<!-- Masthead-->
<header class="masthead">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                            <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                <form id="contactForm" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                    <div class="form-outline form-white mb-3">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="name@example.com" required/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button><br><br><br>

                                    <div>
                                        <p class="mb-0">Don't have an account? Register now!</p><br>
                                        <a class="btn btn-outline-light btn-lg px-5" href="<?php echo $roothtml?>/register.php">Register</a>
                                    </div>
                                </form>
                            <?php else : ?>
                                <?php
                                if(isset($_POST['email'])) {
                                    //process
                                    $email = htmlspecialchars($_POST['email']);
                                    $password = htmlspecialchars($_POST['password']);
                                    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
                                    
                                    $result = $conn->query($sql);
                                
                                    if ($result->num_rows > 0) {
                                        //output user login successful
                                        $_SESSION["useremail"] = $email;
                                        header("Location: $roothtml/events.php");
                                        exit(); 
                                    } 
                                    else{
                                        ?>
                                        <p class="text-white-50 mb-5">Wrong account or password!<br>Please try again.</p>
                                        <a class="btn btn-outline-light btn-lg px-5" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <p>You need to provide proper email and password.</p>
                                    <?php
                                }
                                ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include 'webtemplate1footer.php'; ?>