<?php 
include "includes/db.php"; 
include "includes/header.php"; 
?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8"><?php 

                $query = "SELECT * FROM posts";
                

                $select_all_posts_query = mysqli_query($connection, $query);

                if ($select_all_posts_query) {
                    echo "<script>console.log('Query Successful. Displaying data.')</script>";
                } else {
                    echo "<script>console.log('Error: Query Failed.')</script>";
                }

                while($row = mysqli_fetch_assoc($select_all_posts_query)) {

                    
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_id = $row['post_id']; ?>

                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?>
                </p>
                    <hr>
                <img class="img-responsive" src="<?php echo $post_image ? 'images/'.$post_image : '//placehold.it/900x300' ?>" alt="Blog Image <?php echo $post_id; ?>">

                    <hr>
                <p><?php echo $post_content; ?></p>
               
                <a class="btn btn-primary" href="#">
                    Read More <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

                <hr>


              <?php } ?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->
        <hr>

<!-- Footer -->
<?php include "includes/footer.php"; ?>