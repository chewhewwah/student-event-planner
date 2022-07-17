<?php include 'webtemplate1header.php'; ?>
    <?php 
        $eventId = $_GET["eventId"];
        $email = $_SESSION["useremail"];
        
        $sql = "SELECT email, description, date, time, comments, eventId FROM event_planner WHERE email='$email' AND eventId='$eventId'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {        
            $desc = $row["description"];
            $date = $row["date"];
            $time = $row["time"];
            $comm = $row["comments"]; 
            }
        }
        
        $sql = "INSERT INTO historyevent_planner (email, description, date, time, comments, historyeventId) VALUES ('$email', '$desc', '$date', '$time', '$comm', '$eventId')";
        $sql2 = "DELETE FROM event_planner WHERE email='$email' AND eventId='$eventId'";

        if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
            header("Location: $roothtml/events.php");
        }
            else {
        echo "Error deleting record: " . $conn->error;
        }
    ?>
<?php include 'webtemplate1footer.php'; ?>