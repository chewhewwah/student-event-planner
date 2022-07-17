<?php include 'webtemplate1header.php'; ?>
    <?php 
        $eventId = $_GET["historyeventId"];
        $email = $_SESSION["useremail"];
        
        $sql = "DELETE FROM historyevent_planner WHERE historyeventId='$eventId' AND email='$email'";

        if ($conn->query($sql) === TRUE) {
            header("Location: $roothtml/pastevent.php");
        }
            else {
        echo "Error deleting record: " . $conn->error;
         }
    ?>
<?php include 'webtemplate1footer.php'; ?>