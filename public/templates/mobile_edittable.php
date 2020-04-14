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
        <?php
foreach ($result as $row) {
?>
           <tr>
                <td><?php
    echo escape($row["id"]);
?></td>
                <td><?php
    echo escape($row["firstname"]);
?></td>
                <td><?php
    echo escape($row["lastname"]);
?></td>
                <td><?php
    echo escape($row["location"]);
?></td>
                <td><?php
    echo escape($row["due_date"]);
?> </td>
                <td><?php
    echo escape($row["status"]);
?> </td>    
                <td><?php
    echo "NA";
?> </td>  
              <td><a href="edit2.php?editid=<?php
    echo $row["id"];
?>" class="linkbutton">Edit</a></td>
              <td><a href="complete.php?editid=<?php
    echo $row["id"];
?>" class="linkbutton">Mark as Complete</a></td>
              <td><a href="checkout.php?editid=<?php
    echo $row["id"];
?>" class="linkbutton">Check-out</a></td>
            </tr>
        <?php
}
?>
       </tbody>
    </table>