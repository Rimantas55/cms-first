<?php include "includes/admin_header.php";?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php";?> 


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">


                    <h1 class="page-header">
                        WELLCOME TO ADMIN
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">


                    <?php insert_categories(); ?>

                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="cat_title">Add Category</label>
                            <input type="text" name="cat_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
                        </div>
                    </form>


                    <?php

                    if(isset($_GET['edit'])) {

                        $cat_id = $_GET['edit'];

                        include "includes/update_categories.php";

                    }


                    ?>



                    </div><!-- Add Category Form -->

                    <div class="col-xs-6">


                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php //FIND ALL CATEGORIES QUERY

                            $query = "SELECT * FROM categories";
                            $select_categories = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_categories)) {

                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];

                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";

                                echo "</tr>";

                            }

                            ?>
                            
                            <?php //DELETE QUERY

                            if(isset($_GET['delete'])) {

                                $the_cat_id = $_GET['delete']; //$the_cat_id = $cat_id, naudojam kita pavadinima kad nesusipainioti

                                $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                                $delete_query = mysqli_query($connection, $query);
                                header("Location: categories.php"); //this will refresh browser and instantly will allow to send info to MySql db

                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.row -->
        

    </div><!-- /.container-fluid -->
    

</div>







<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php";?> 
