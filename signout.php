<?php include 'webtemplate1header.php' ?>
<?php if (!isset($_SESSION["useremail"])){
    header("Location: $roothtml/index.php");
}
?>
<?php 

    unset($_SESSION['useremail']);
    session_destroy();
    session_commit();
?>

<?php header("Location: $roothtml/index.php");
?>
