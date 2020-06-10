
<?php


if(isset($_POST['submit']))
{
    
    


}




?>




<table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Event Name</th>
                                <th>Event_organizer</th>
                               
                            </tr>
                        </thead>
                       
                    <?php
                     $user=$_SESSION['username'];
                    $query="SELECT * FROM invitation WHERE username='$user' ";
                    $select_invitations=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_invitations))
                    {
                        $invitation_id=escape($row['id']);
                        $invitation_event=escape($row['event']);
                        $invitation_email=escape($row['username']);
                        echo "<tr>";
                        echo "<td>$invitation_id</td>";
                        echo "<td>$invitation_event</td>";
                        echo "<td>$invitation_email</td>";
                        echo "</tr>";
                        
                    }




                    ?>
                    </table>
                    




