               <table class="mobile_ticketstable">
            <thead>
                <tr>
                    <th>Ticket #</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Location</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Tech Assigned</th>
                    <th>Edit</th>
                    <th>Complete</th>
                    <th>Check-out</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <label for="id">ID</label>
                <td id="id"><?php echo escape($row["id"]); ?></td>
                <label for="firstname">First Name</label>
                <td id="firstname"><?php echo escape($row["firstname"]); ?></td>
                <label for="lastname">Last Name</label>
                <td id="lastname"><?php echo escape($row["lastname"]); ?></td>
                <label for="location">Location</label>
                <td id="location"><?php echo escape($row["location"]); ?></td>
                <label for="due_date">Due Date</label>
                <td id="due_date"><?php echo escape($row["due_date"]); ?> </td>
                <label for="status">Status</label>
                <td id="status"><?php echo escape($row["status"]); ?> </td>
                <label for="tech">Tech</label>     
                <td id="tech"><?php echo "NA"; ?> </td>   
              <td><a href="edit2.php?editid=<?php echo $row["id"]; ?>" class="linkbutton">Edit</a></td>
              <td><a href="complete.php?editid=<?php echo $row["id"]; ?>" class="linkbutton">Mark as Complete</a></td>
              <td><a href="checkout.php?editid=<?php echo $row["id"]; ?>" class="linkbutton">Check-out</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>