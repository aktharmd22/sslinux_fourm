<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum page</title>
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
        <link rel="stylesheet" href="commentstyle.css">
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65ae1e450ff6374032c33415/1hko2ch02';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body>
    <style>
        #searchBlogs {
            margin-top: -230px;
            margin-bottom: 120px;
            color: #fff;
        }

        #searchBlogs input {
            padding: 5px 100px;
            padding-left: 10px;
            border-radius: 50px;
            border-style: none;
            outline: none
        }

        #searchBlogs input {}

        #searchBlogs button {
            border-style: none;
            background-color: #000;
            color: #fff;
            padding: 4px 10.33px;
            margin-left: -83px;
            border-radius: 50px
        }

        @import(max-width:1050px) {
            #bannerImg {
                display: none;
            }

            #searchBlogs {
                margin-top: -150px;
                margin-bottom: 120px;
            }
        }

        #Blogs {
            background-color: #f1f1f1;
            border: 1px solid #035ca8;
            margin: 10px;
        }

        #descWidth {
            width: 40vw;
            text-align: justify;
        }
    </style>

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
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                    
                    
                    <li class="nav-item active">
                        <div class="dropdown">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="login.php">User Login</a>
                                    <a class="dropdown-item" href="adminLogin.php">Admin Login</a>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="registration.php">REGISTER</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div>
        <img src="images/forumBg.jpg" class="img-fluid img-responsive" alt="" width="100%" height="20%" id="bannerImg">
        <div class="text-center" id="searchBlogs">
            <h2>Our Support Center</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, eius?</p>
            <div>
                <input type="text">
                <button>Search</button>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="row" id="card">
            <!-- <div class="col-12 >
                <p id="cardHead"><a href="">Ubuntu forum community</a></p>

                <p id="definition">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eveniet
                    delectus, quas sed dicta blanditiis fuga sint impedit beatae.
                </p>
            </div>
            <div class="col-md-4 col-lg-4 col-12">
                <ul class="">
                    <li><a href="">New to Ubuntu</a></li>
                    <li><a href="">Hardware</a></li>
                    <li><a href="">Multimedia Software</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-4 col-12">
                <ul class="">
                    <li><a href="">General Help</a></li>
                    <li><a href="">Desktop Environments</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-4 col-12">
                <ul class="">
                    <li><a href="">Installation & Upgrades</a></li>
                    <li><a href="">Networking & Wireless</a></li>
                </ul>
            </div> -->

        </div>

        <div class="container">
            <div class="row">
              <!--   <div class="col-12 col-md-8 col-lg-8" id="query">
                    <h3>Can’t find an answer?</h3>
                    <p>Make use of a qualified tutor to get the answer</p>
                    <button class="btn btn-primary float-right" id="askQA">Ask a Question</button>
                </div> -->


                <div class="col-12" >
                <table class="table table-stripped table-hover" id="forumTable">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center">SS Linux Forum</th>
                                <!-- <th id="mobileViewNone">Topics</th>
                                <th id="mobileViewNone">Views</th> -->
                            </tr>
                        </thead>
                        <tbody >

                            <?php
                            $connection = mysqli_connect("localhost", "root", "");
                            $db = mysqli_select_db($connection, "sixth_star_forum");

                            $sql = "select * from posts ORDER BY id DESC";
                            $run = mysqli_query($connection, $sql);
                            $id = 1;

                            while ($row = mysqli_fetch_array($run)) {
                                $uid = $row['id'];
                                $title = $row['title'];
                                $description = $row['description'];
                                $postDate = $row['postDate'];
                                ?>

                                
                                <tr id="Blogs">

<td>
    <h6>
        <?php echo $title ?>
    </h6>
    <p id="descWidth">
        <?php echo $description ?>
    </p>
</td>
<!-- <td id="mobileViewNone">10</td>
<td id="mobileViewNone">105</td> -->
<td>
    post on <?php echo $postDate ?>
</td>
</br>
</tr>
                                
                                    
<!-- 
                                
                                <tr>
                                    <td colspan="4">
                                    <div id="accordion">
     <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Comments
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body"> 
           <?php include 'comments.html' ?>
        
        </div>
      </div>
    </div> 
    

  </div>
                                    
                                    </td>
                                </tr> -->
                               
                               
                                <?php $id++;
                               
                            } ?>
                             

                        </tbody>
                    </table>
                </div>

            </div>
                <?php include './comment-section/commentindex.html'?>
        </div>
    </div>
    


</body>

</html>