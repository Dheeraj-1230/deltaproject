<?php
if(isset($_POST['submit']))
{
    $event_username=$_SESSION['username'];
    $event_name=escape($_POST['event_name']);
    $event_send_to=escape($_POST['send_to']);
   $query =  "INSERT INTO invitation(username, event, send_to) ";
   $query .="VALUES('{$event_username}','{$event_name}','{$event_send_to}')";
    $create_post_query=mysqli_query($connection,$query);
      confirm($create_post_query);
}
?>
<form action="" method="post" enctype="multipart/form-data" >
<div class="form-group">
<label for="event_name">Event Name</label>
<select name="event_name" id="">
<?php
 $user=$_SESSION['username'];
$query="SELECT * FROM posts WHERE username='$user' ";
$select_categories=mysqli_query($connection,$query);
confirm($select_categories);
while($row=mysqli_fetch_assoc($select_categories))
{
    $cat_title=$row['event_name'];
    echo "<option value='{$cat_title}'>{$cat_title}</option>";
}
?>
</select>
</div>
<div class="form-group">
<label for="event_name">Send To:-</label>
<select name="send_to" id="">
<?php
 $user=$_SESSION['username'];
$query="SELECT * FROM users WHERE username!='$user' ";
$select_categories=mysqli_query($connection,$query);
confirm($select_categories);
while($row=mysqli_fetch_assoc($select_categories))
{
    $cat_title=$row['username'];
    echo "<option value='{$cat_title}'>{$cat_title}</option>";
}
?>
</select>
</div>
<div class="form-group">
<label for="title">Add People</label>
<input type="submit" class="btn btn-primary" name="submit" value="Add">
</div>
</form>