               <table id="ticketstable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Vin Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>Year</th>
                    <th>Date</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Due Date</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>description</th>
                    <th>oilchange</th>
                    <th>fullservice</th>
                    <th>otherservice</th>
                    <th>otherservicedescription</th>
                    <th>fronttirechange</th>
                    <th>reartirechange</th>
                    <th>audiotroubleshooting</th>
                    <th>otheraudiodescription</th>
                    <th>fullaudiosystem</th>
                    <th>audioupgrade</th>
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
                <td><?php echo escape($row["vin"]); ?> </td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["email"]); ?></td>
                <td><?php echo escape($row["phone"]); ?></td>
                <td><?php echo escape($row["year"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
                <td><?php echo escape($row["make"]); ?> </td>
                <td><?php echo escape($row["model"]); ?> </td>
                <td><?php echo escape($row["due_date"]); ?> </td>
                <td><?php echo escape($row["location"]); ?></td>
                <td><?php echo escape($row["status"]); ?> </td> 
                <td><?php echo escape($row["description"]); ?></td>
                <td><?php echo escape($row["oilchange"]); ?></td>
                <td><?php echo escape($row["fullservice"]); ?></td>
                <td><?php echo escape($row["otherservice"]); ?></td>
                <td><?php echo escape($row["otherservicedescription"]); ?></td>
                <td><?php echo escape($row["fronttirechange"]); ?></td>
                <td><?php echo escape($row["reartirechange"]); ?></td>
                <td><?php echo escape($row["audiotroubleshooting"]); ?></td>
                <td><?php echo escape($row["otheraudiodescription"]); ?></td>
                <td><?php echo escape($row["fullaudiosystem"]); ?></td>
                <td><?php echo escape($row["audioupgrade"]); ?></td>         
              <td><a href="view.php?rand=<?php echo $row["image1"]; ?>"><img src="view.php?rand=<?php echo $row["image1"]; ?>" alt="<?php echo $row["image1"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image2"]; ?>"><img src="view.php?rand=<?php echo $row["image2"]; ?>" alt="<?php echo $row["image2"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image3"]; ?>"><img src="view.php?rand=<?php echo $row["image3"]; ?>" alt="<?php echo $row["image3"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image4"]; ?>"><img src="view.php?rand=<?php echo $row["image4"]; ?>" alt="<?php echo $row["image4"]; ?>" height="42" width="42"></a></td>
              <td><a href="readdetails.php?editid=<?php echo $row["id"]; ?>">View</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>