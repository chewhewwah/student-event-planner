<?php include 'webtemplate1header.php'; ?>
<?php if (isset($_SESSION["useremail"])){
    header("Location: $roothtml/events.php");
}
?>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-auto align-self-end">
                <h1 class="text-white font-weight-bold">Welcome to Student Event Planner!</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Login now to start planning your events in the simplest possible way!</p>
                <a class="btn btn-primary btn-xl" href="#learnmore">Learn More</a>
            </div>
        </div>
    </div>
</header>
<!-- Learn More-->
<section class="page-section" id="learnmore">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">About The System</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-calendar-check-fill fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Events</h3>
                    <p class="text-muted mb-0">Plan your events online with ease now!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-key-fill fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Security</h3>
                    <p class="text-muted mb-0">Your data here can only be accessible by only you!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Accessibility</h3>
                    <p class="text-muted mb-0">Accessible anywhere and anytime with a valid network!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Advertising -->
<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Absolutely Free of Charge Platform Here!</h2>
        <h2 class="mb-5">Sign up now to get started!</h2>
        <a class="btn btn-light btn-xl" href="register.php">Sign Up</a>
    </div>
</section>
<?php include 'webtemplate1footer.php'; ?>
