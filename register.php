<?php include 'webtemplate1header.php'; ?>
<!-- Masthead-->
<header class="masthead">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>

                            <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
                            <p class="text-white-50 mb-5">Please enter the required information.</p>    
                            <form id="contactForm" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                    <div class="form-outline form-white mb-3">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="name@example.com" required/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                                </form>
                            <?php else : ?>
                                <?php
                                //var_dump($_REQUEST);
                                if(isset($_POST['email'])) {
                                    //process
                                    $email = htmlspecialchars($_POST['email']);
                                    $password = htmlspecialchars($_POST['password']);
                                    
                                    $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
                                    $sqlcheck = "SELECT email FROM user WHERE email='$email'";

                                    $result = $conn->query($sqlcheck);

                                    if ($result->num_rows > 0){
                                        echo "Account already exists with this email.";
                                        ?><br>
                                            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
                                        <?php
                                    }
                                    else{
                                        if ($conn->query($sql) === TRUE) {
                                            //output user registration successful    
                                            include 'successregistration.php';
                                        } else {
                                            echo "Error creating record: " . $conn->error;
                                        }
                                    }
                                }
                                else{
                                    ?>
                                    <p>You need to provide proper your name and email address.'</p>
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