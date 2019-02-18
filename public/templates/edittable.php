               <table id="ticketstable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Vin Number</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Image 4</th>
                    <th>Edit</th>
                    <th>Complete</th>
                    <th>Print</th>
                    <th>Check-out</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["year"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
                <td><?php echo escape($row["vin"]); ?> </td>
                <td><?php echo escape($row["make"]); ?> </td>
                <td><?php echo escape($row["model"]); ?> </td>
                <td><?php echo escape($row["due_date"]); ?> </td>
                <td><?php echo escape($row["status"]); ?> </td>                
              <td><a href="view.php?rand=<?php echo $row["image1"]; ?>" data-lightbox="image-1"><img src="view.php?rand=<?php echo $row["image1"]; ?>" alt="<?php echo $row["image1"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image2"]; ?>" data-lightbox="image-1"><img src="view.php?rand=<?php echo $row["image2"]; ?>" alt="<?php echo $row["image2"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image3"]; ?>" data-lightbox="image-1"><img src="view.php?rand=<?php echo $row["image3"]; ?>" alt="<?php echo $row["image3"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image4"]; ?>" data-lightbox="image-1"><img src="view.php?rand=<?php echo $row["image4"]; ?>" alt="<?php echo $row["image4"]; ?>" height="42" width="42"></a></td>
              <td><a href="edit2.php?editid=<?php echo $row["id"]; ?>">Edit</a></td>
              <td><a href="complete.php?editid=<?php echo $row["id"]; ?>">Mark as Complete</a></td>
              <td><a href="print.php?editid=<?php echo $row["id"]; ?>">Print</a></td>
              <td><a href="checkout.php?editid=<?php echo $row["id"]; ?>">Check-out</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>