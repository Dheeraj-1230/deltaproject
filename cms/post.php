<?php include 'includes/db.php'; ?>
<?php 
include 'includes/header.php';
include 'includes/navigation.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <?php
if(isset($_GET['e_id']))
{
    $the_event_id=$_GET['e_id'];
}
                  $query="SELECT * FROM posts WHERE event_id=$the_event_id ";
                  $select_all_posts_query=mysqli_query($connection,$query);
                  while($row=mysqli_fetch_assoc($select_all_posts_query)){
                    $event_name=$row['event_name'];
                    $event_organizer=$row['event_organizer'];
                    $event_date=$row['event_date'];
                    $event_image=$row['event_image'];
                   ?>
                   <h1 class="page-header">
                    EVENT
                </h1>
               
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $event_date?></p>
                <hr>
                <img width="700" height="150" class="img-responsive" src="images/<?php echo $event_image;?>" alt="">
                <hr>
                <hr>
                <h2>
                    <a href="#"><?php echo $event_name?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $event_organizer?></a>
                </p>
    <?php     }?>
    </form>
                </div>
                <style>
                h2
                {
                    position:absolute;
                    top:400px;
                    left:220px;
                }
                p.lead
                {
                    position:absolute;
                    top:520px;
                    left:250px;
                }
                </style>