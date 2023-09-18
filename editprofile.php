<?php include 'webtemplate1header.php'; ?>
<?php if (!isset($_SESSION["useremail"])){
    header("Location: $roothtml/index.php");
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
                            <h2 class="fw-bold mb-2 text-uppercase">Edit Profile</h2>

                            <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
                            <?php
                                $sql = "SELECT email FROM user WHERE email='$_SESSION[useremail]'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                        // output data
                                        while($row = $result->fetch_assoc()) {
                                            
                                            $email = $row["email"];
                                        }
                                }
                            ?>
                            <p class="text-white-50 mb-5">Please enter your desired new password.</p>    
                            <form id="contactForm" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" autocomplete="off" method="post">
                                    <div class="form-outline form-white mb-3">
                                        <input disabled type="email" id="email" name="email" class="form-control form-control-lg" value="<?php echo $email ?>"/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="currpassword" id="currpassword" name="currpassword" class="form-control form-control-lg" autocomplete="off" required/>
                                        <label class="form-label" for="password">Current Password</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="newpassword" id="newpassword" name="newpassword" class="form-control form-control-lg" autocomplete="off" required/>
                                        <label class="form-label" for="password">New Password</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="conpassword" id="conpassword" name="conpassword" class="form-control form-control-lg" autocomplete="off" required/>
                                        <label class="form-label" for="password">Confirm Password</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Save New Password</button>
                                </form>
                            <?php else : ?>
                                <?php
                                //var_dump($_REQUEST);
                                if( $_POST["conpassword"] === $_POST["newpassword"] ){
                                    if(isset($_POST['currpassword'])) {
                                        //process update user info
                                        $email = $_SESSION["useremail"];
                                        $currpassword = htmlspecialchars($_POST['currpassword']);
                                        $newpassword = htmlspecialchars($_POST['newpassword']);
                                        $sqlcheck = "SELECT * FROM user WHERE email = '$email' AND password = '$currpassword'";
                                        $sql = "UPDATE user SET password ='$newpassword' WHERE email='$email' AND password='$currpassword'";
                                        
                                        $result = $conn->query($sqlcheck);

                                        if ($result->num_rows > 0) {
                                            if ($conn->query($sql) === TRUE){
                                                //output user edit profile successful
                                                include 'successeditprofile.php';
                                            } else {
                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                            }
                                            
                                        } else {
                                            ?>
                                            <p class="text-white-50 mb-5">Wrong current password!<br>Please try again.</p>
                                            <a class="btn btn-outline-light btn-lg px-5" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                        <p class="text-white-50 mb-5">Wrong email address!<br>Please try again.</p>
                                        <a class="btn btn-outline-light btn-lg px-5" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <p class="text-white-50 mb-5">New Password is not the same as Confirm Password!<br>Please try again.</p>
                                    <a class="btn btn-outline-light btn-lg px-5" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
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