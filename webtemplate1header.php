<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    var_dump($_SESSION);
?>
<?php
    $roothtml = 'http://localhost/student';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Student Event Planner</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            
            <?php if(isset($_SESSION['useremail'])) {
            ?>
                <a class="navbar-brand" href="events.php">Student Event Planner</a>
            <?php }
            else{ ?>
                <a class="navbar-brand" href="index.php">Student Event Planner</a>
            <?php } ?>


                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        
                
                    <?php if(isset($_SESSION['useremail'])) {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="createevent.php">Create Event</a></li> 
                        <li class="nav-item"><a class="nav-link" href="pastevent.php">Past Event</a></li> 
                        <li class="nav-item"><a class="nav-link" href="editprofile.php">Edit Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
                    <?php }
                    else{ ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>    
                        <li class="nav-item"><a class="nav-link" href="register.php">Register Account</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
<?php include 'database.php'; ?>