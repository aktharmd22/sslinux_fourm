<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="forum.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="commentstyle.css">
    <style>
        body {
            background-color: #efefef;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin:  20px  0;
        }
        .pagination a {
            margin:  0  10px;
            color: #000;
            text-decoration: none;
        }
        .pagination a.active {
            color: #fff;
            background-color: #007bff;
            padding:  5px  10px;
            border-radius:  5px;
        }
    </style>
</head>

<body>
    <!-- Your existing HTML content here -->

    <div id="container">
        <div class="row" id="card">
            <!-- Your existing forum content here -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-stripped table-hover" id="forumTable">
                        <thead>
                            <p colspan="4" class="text-center">SS Linux Forum</p>
                        </thead>
                        <tbody>
                            <?php
                            // Database Connection
                            $connection = mysqli_connect("localhost", "root", "");
                            $db = mysqli_select_db($connection, "sixth_star_forum");

                            // Search Term
                            $search = isset($_GET['search']) ? $_GET['search'] : '';
                            $search = mysqli_real_escape_string($connection, $search);

                            // Pagination
                            $postsPerPage =  5; // Number of posts to show per page
                            $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] :  1;
                            $start = ($page -  1) * $postsPerPage;

                            // SQL Query with Search Condition and Pagination
                            $sql = "SELECT * FROM posts WHERE title LIKE '%$search%' OR description LIKE '%$search%' ORDER BY id DESC LIMIT $start, $postsPerPage";
                            $run = mysqli_query($connection, $sql);

                            // Calculate total pages
                            $sqlCount = "SELECT COUNT(*) as total FROM posts WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                            $resultCount = mysqli_query($connection, $sqlCount);
                            $rowCount = mysqli_fetch_assoc($resultCount);
                            $totalPages = ceil($rowCount['total'] / $postsPerPage);

                            while ($row = mysqli_fetch_array($run)) {
                                // Your existing code to display posts
                                $uid = $row['id'];
                                $title = $row['title'];
                                $description = $row['description'];
                                $postDate = $row['postDate'];
                                ?>
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <?php if ($totalPages >  1): ?>
        <div class="pagination">
            <?php for ($i =  1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $page): ?>
                    <a href="?page=<?= $i ?>" class="active"><?= $i ?></a>
                <?php else: ?>
                    <a href="?page=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
