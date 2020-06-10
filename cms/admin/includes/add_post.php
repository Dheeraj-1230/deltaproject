<?php
if(isset($_POST['submit']))
{
    $event_name=escape($_POST['title']);
    $event_username=$_SESSION['username'];
    $event_category=escape($_POST['event_category']);
    $event_image=$_FILES['image']['name'];
    $event_image_temp=$_FILES['image']['tmp_name'];
    $event_author=escape($_POST['author']);
    $event_date=escape(date('d-m-y'));


    move_uploaded_file($event_image_temp, "../images/$event_image");
   $query =  "INSERT INTO posts(event_name, username, event_category, event_image, event_organizer, event_date) ";
   $query .="VALUES('{$event_name}','{$event_username}','{$event_category}','{$event_image}','{$event_author}',now())";
    $create_post_query=mysqli_query($connection,$query);
      confirm($create_post_query);
}
?>
<form action="" method="post" enctype="multipart/form-data" >
<div class="form-group">
<label for="title">Event Name</label>
<input type="text" class="form-control" name="title">
</div>
<div class="form-group">
<label for="category">Category</label>
<select name="event_category" id="">
<?php
$query="SELECT * FROM categories";
$select_categories=mysqli_query($connection,$query);
confirm($select_categories);
while($row=mysqli_fetch_assoc($select_categories))
{
    $cat_id=escape($row['cat_id']);
    $cat_title=escape($row['cat_title']);
    echo "<option value='{$cat_title}'>{$cat_title}</option>";
}
?>
</select>
<div class="form-group">
<label for="event_image">Event Image</label>
<input type="file" name="image">
</div>
</div>
<div class="form-group">
<label for="title">Event Organizer</label>
<input type="text" class="form-control" name="author">
</div>
<div class="form-group">
<label for="title">Add Event</label>
<input type="submit" class="btn btn-primary" name="submit" value="Add">
</div>
</form>