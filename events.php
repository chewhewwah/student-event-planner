<?php include 'webtemplate1header.php'; ?>
<!-- Masthead-->
<header class="masthead">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-start h-100">
            
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase" align="center">Event Lists</h2>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width:10%" scope="col">Date</th>
                                            <th style="width:10%" scope="col">Time</th>
                                            <th style="width:30%" scope="col">Event Description</th>
                                            <th style="width:30%" scope="col">Comments</th>
                                            <th style="width:20%" scope="col">Action</th>
                                        </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                        $sql = "SELECT email, description, date, time, comments, eventId FROM event_planner WHERE email='$_SESSION[useremail]'";

                                        $result = $conn->query($sql);
                                    
                                    ?>
                                    <?php 
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $row["date"] ?> </th>
                                                <td><?php echo $row["time"] ?> </td>
                                                <td><?php echo $row["description"] ?> </td>
                                                <td><?php echo $row["comments"] ?> </td>
                                                <td><a href="<?php echo $roothtml?>/editevent.php?eventId=<?php echo $row['eventId'] ?>">Edit Event</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $roothtml?>/historyevent.php?eventId=<?php echo $row['eventId'] ?>">Delete Event</a></td>
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