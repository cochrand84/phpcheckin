               <table id="ticketstable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Check in Date</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Location</th>
                    <th>Vin Number</th>
                    <th>Year</th>                 
                    <th>Make</th>
                    <th>Model</th>
                    <th>Due Date</th>
                    <th>Time Left</th>
                    <th>Status</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Image 4</th>
                    <th>View Details</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
                <td><?php echo escape($row["vin"]); ?> </td>
                <td><?php echo escape($row["year"]); ?></td>
                <td><?php echo escape($row["make"]); ?> </td>
                <td><?php echo escape($row["model"]); ?> </td>
                <td><?php echo escape($row["due_date"]); ?> </td>
                <td><?php 
                        $daysleft = 0;
                        $curDate = date('Y-m-d');
                        $fromDate = $row["due_date"];
                        $secondsLeft = abs(strtotime($curDate) - strtotime($fromDate));
                        $minutesLeft = $secondsLeft / 60;
                        $hoursLeft = $minutesLeft / 60;
                        $daysLeft = $hoursLeft / 24;
                        echo "$daysLeft days";
                        ?>
                </td>
                <td><?php echo escape($row["status"]); ?> </td>                
              <td><a href="view.php?rand=<?php echo $row["image1"]; ?>"><img src="view.php?rand=<?php echo $row["image1"]; ?>" alt="<?php echo $row["image1"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image2"]; ?>"><img src="view.php?rand=<?php echo $row["image2"]; ?>" alt="<?php echo $row["image2"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image3"]; ?>"><img src="view.php?rand=<?php echo $row["image3"]; ?>" alt="<?php echo $row["image3"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image4"]; ?>"><img src="view.php?rand=<?php echo $row["image4"]; ?>" alt="<?php echo $row["image4"]; ?>" height="42" width="42"></a></td>
              <td><a href="readdetails.php?editid=<?php echo $row["id"]; ?>">View</a></td>
            </tr>
        <?php }  ?>
        </tbody>
    </table>