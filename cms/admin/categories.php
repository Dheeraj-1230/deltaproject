<?php
include "includes/header.php";
?>
<div id="wrapper">
<?php
include "includes/navigation.php";
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                       Invitation
                        Manager
                    </h1>
                    <div class="col-xs-6">
                    <?php insert_categories(); ?>
                    <form action="" method="post">
                    <div class="form-group">
                    <label for="cat-title">Add Event</label>
                    <input class="form-control" type="text" name="cat_title" placeholder="Enter Event Category">
                    </div>
                    <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                    </div>
                    </form>
                    </div>
                    <div class="col-xs-6">
                    <?php
               $query="SELECT * FROM categories";
               $select_categories=mysqli_query($connection,$query);
                    ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($select_categories)){
                            $cat_id=escape($row['cat_id']);
                            $cat_title=escape($row['cat_title']);
                            echo "<tr>";
                            echo "<td>{$cat_id}</td>";
                            echo "<td>{$cat_title}</td>";
                            echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                   </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>