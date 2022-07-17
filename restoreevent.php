<?php include 'webtemplate1header.php'; ?>
    <?php 
        $historyeventId = $_GET["historyeventId"];
        $email = $_SESSION["useremail"];
        
        $sql = "SELECT email, description, date, time, comments, historyeventId FROM historyevent_planner WHERE email='$email' AND historyeventId='$historyeventId'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {        
            $desc = $row["description"];
            $date = $row["date"];
            $time = $row["time"];
            $comm = $row["comments"]; 
            }
        }
        
        $sql = "INSERT INTO event_planner (email, description, date, time, comments, eventId) VALUES ('$email', '$desc', '$date', '$time', '$comm', '$historyeventId')";
        $sql2 = "DELETE FROM historyevent_planner WHERE email='$email' AND historyeventId='$historyeventId'";

        if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
            header("Location: $roothtml/events.php");
        }
            else {
        echo "Error deleting record: " . $conn->error;
        }
    ?>
<?php include 'webtemplate1footer.php'; ?>