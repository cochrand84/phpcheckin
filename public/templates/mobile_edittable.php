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
                <label for="id">ID
                <td id="id"><?php echo escape($row["id"]); ?></td></label>
                <label for="firstname">First Name
                <td id="firstname"><?php echo escape($row["firstname"]); ?></td></label>
                <label for="lastname">Last Name
                <td id="lastname"><?php echo escape($row["lastname"]); ?></td></label>
                <label for="location">Location
                <td id="location"><?php echo escape($row["location"]); ?></td></label>
                <label for="due_date">Due Date
                <td id="due_date"><?php echo escape($row["due_date"]); ?> </td></label>
                <label for="status">Status
                <td id="status"><?php echo escape($row["status"]); ?> </td></label>
                <label for="tech">Tech    
                <td id="tech"><?php echo "NA"; ?> </td>  </label> 
              <td><a href="edit2.php?editid=<?php echo $row["id"]; ?>" class="linkbutton">Edit</a></td>
              <td><a href="complete.php?editid=<?php echo $row["id"]; ?>" class="linkbutton">Mark as Complete</a></td>
              <td><a href="checkout.php?editid=<?php echo $row["id"]; ?>" class="linkbutton">Check-out</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>