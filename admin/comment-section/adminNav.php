<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="forum.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
</head>
<body>
<div>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navBar">
            <a class="navbar-brand" href="#"><img src="images/sixthstar-linux2-removebg-preview.png" id="logo" alt=""
                    class="img-responsive img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">COURSES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">JOB TRAINING</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CAREERS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./admin/comment-section/commentindex.html">COMMENTS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Hey, <?php echo $_SESSION['username']; ?>!</a>
                    </li>
                    
                    </li>
                </ul>
            </div>
        </nav> 
</body>
</html>