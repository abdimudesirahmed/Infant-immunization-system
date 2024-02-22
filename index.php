<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin UI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .crop-text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Number of lines to show */
            -webkit-box-orient: vertical;
        }
    </style>
</head>
<body>
    <!-- NAVIGATION-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="index.php" class="navbar-brand">Infant Immunization</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">
                            <i class="fa fa-user-times"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="About.php" class="nav-link">
                            <i class="fa fa-user-times"></i> About
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-gear"></i> Vaccination News</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    include('./config/constant.php');

                    // Pagination Variables
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $posts_per_page = 3; // Number of posts per page

                    // Calculate offset for database query
                    $offset = ($current_page - 1) * $posts_per_page;

                    $query = "SELECT post.tittle,
                              post.post_id,
                              post.catagory,
                              post.description,
                              post.date_of_post,
                              post_img.img_url
                              FROM post
                              INNER JOIN post_img
                              ON post.post_id = post_img.post_id
                              ORDER BY post.date_of_post ASC
                              LIMIT $offset, $posts_per_page";

                    $result = mysqli_query($conn, $query) or die(mysqli_error());
                    $rows = mysqli_num_rows($result);

                    if ($rows > 0) {
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $id = $rows['post_id'];
                            $title = $rows['tittle'];
                            $catagory = $rows['catagory'];
                            $description = $rows['description'];
                            $date_of_post = $rows['date_of_post'];
                            $img_url = $rows['img_url'];
                            ?>
                            <!-- News Card -->
                            <div class="card mb-3">
                                <img src="./images/posts/<?php echo $img_url; ?>" class="card-img-top" alt="<?php echo $img_url; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $title; ?></h5>
                                    <p class="card-text crop-text"><?php echo $description; ?></p>
                                    <p><?php echo $date_of_post ?></p>
                                </div>
                            </div>
                            <!-- End News Card -->
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php
            $query = "SELECT COUNT(*) AS total FROM post";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $total_pages = ceil($row['total'] / $posts_per_page);

            for ($i = 1; $i <= $total_pages; $i++) {
                $active_class = ($i == $current_page) ? 'active' : '';
                ?>
                <li class="page-item <?php echo $active_class; ?>">
                    <a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <!-- End Pagination -->

    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">© 2023 All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
