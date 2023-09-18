<?php include 'webtemplate1header.php'; ?>
<?php if (!isset($_SESSION["useremail"])){
    header("Location: $roothtml/index.php");
}
?>
<!-- Masthead-->
<header class="masthead">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-start h-100">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-uppercase" align="center">Past Event Lists</h2><br>
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width:10%" scope="col">Date</th>
                                <th style="width:10%" scope="col">Time</th>
                                <th style="width:25%" scope="col">Event Description</th>
                                <th style="width:35%" scope="col">Comments</th>
                                <th style="width:20%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT email, description, date, time, comments, historyeventId FROM historyevent_planner WHERE email='$_SESSION[useremail]'";

                            $result = $conn->query($sql);
 
                            if ($result->num_rows > 0) {
                                // output data
                                while($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["date"]?></th>
                                        <td><?php echo $row["time"]?></td>
                                        <td style="text-align:left"><?php echo $row["description"]?></td>
                                        <td style="text-align:left"><?php echo $row["comments"]?></td>
                                        <td><a class="btn btn-outline-light btn-sm px-2" href="<?php echo $roothtml?>/restoreevent.php?historyeventId=<?php echo $row['historyeventId']?>">Restore Event</a>&nbsp;&nbsp;<a class="btn btn-outline-light btn-sm px-2" href="<?php echo $roothtml?>/deleteevent.php?historyeventId=<?php echo $row['historyeventId']?>">Delete Event</a>
                                    </tr>
                                <?php 
                                }
                            }
                        ?>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include 'webtemplate1footer.php'; ?>