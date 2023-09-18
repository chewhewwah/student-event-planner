<?php 
include 'webtemplate1header.php';
if (!isset($_SESSION["useremail"])){
    header("Location: $roothtml/index.php");
}
    $eventId = $_GET["historyeventId"];
    $email = $_SESSION["useremail"];
        
    $sql = "DELETE FROM historyevent_planner WHERE historyeventId='$eventId' AND email='$email'";

    if ($conn->query($sql) === TRUE) {
        header("Location: $roothtml/pastevent.php");
    }
    else {
        echo "Error deleting record: " . $conn->error;
    }
include 'webtemplate1footer.php'; ?>