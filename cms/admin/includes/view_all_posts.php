
<table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Organizer</th>
                                <th>Date</th>
                                <th>View</th>

                                <!-- <th>Event URL</th> -->

                            </tr>
                        </thead>
                       
                    <?php
                    $user=$_SESSION['username'];
                    $query="SELECT * FROM posts WHERE username='$user' ";
                    $select_posts=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_posts))
                    {
                        $event_id=escape($row['event_id']);
                        $event_username=escape($row['username']);
                        $event_name=escape($row['event_name']);
                        $event_organizer=escape($row['event_organizer']);
                        $event_category=escape($row['event_category']);
                        $event_date=escape($row['event_date']);
                        $event_image=escape($row['event_image']);
                        // $event_link=$row['event_URL'];
                        echo "<tr>";
                        echo "<td>$event_id</td>";
                        echo "<td>$event_name</td>";
                        echo "<td>$event_username</td>";
                        echo "<td>$event_category</td>";
                        echo "<td><img width='100' height='60' class='img-responsive'  src='../images/$event_image' alt='image'></td>";
                        echo "<td>$event_organizer</td>";
                        echo "<td>$event_date</td>";
                        echo "<td><a href='../post.php?e_id={$event_id}'>View Event</a></td>";
                        // echo "<td>$event_link</td>";
                        echo "</tr>";
                        
                    }




                    ?>
                    </table>
                    




