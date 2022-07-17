<?php include 'webtemplate1header.php'; ?>
<!-- Masthead-->
<header class="masthead">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2">Create Event</h2>

                            <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
                            <p class="text-white-50 mb-5">Please enter the required information below.</p>    
                            <form id="contactForm" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                    <div class="form-outline form-white mb-3">
                                        <input type="desc" id="desc" name="desc" class="form-control form-control-lg" />
                                        <label class="form-label" for="desc">Description</label>
                                    </div>
                                    
                                    <div class="form-outline form-white mb-3">
                                        <input type="date" id="date" name="date" class="form-control form-control-lg" />
                                        <label class="form-label" for="date">Date</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="time" id="time" name="time" class="form-control form-control-lg" />
                                        <label class="form-label" for="time">Time</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="comm" id="comm" name="comm" class="form-control form-control-lg" />
                                        <label class="form-label" for="comm">Comments</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
                            </form>
                            <?php else : ?>
                                <?php
                                //var_dump($_REQUEST);
                                if(isset($_POST['desc'])) {
                                    //process
                                    $email = $_SESSION["useremail"];
                                    $desc = htmlspecialchars($_POST['desc']);
                                    $date = htmlspecialchars($_POST['date']);
                                    $time = htmlspecialchars($_POST['time']);
                                    $comm = htmlspecialchars($_POST['comm']);

                                    $sql = "INSERT INTO event_planner (email, description, date, time, comments) VALUES ('$email', '$desc', '$date', '$time', '$comm')";
                                    if ($conn->query($sql) === TRUE) {
                                        header("Location: $roothtml/events.php");
                                    } else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                }
                                else{
                                    ?>
                                    <p>Error.</p>
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