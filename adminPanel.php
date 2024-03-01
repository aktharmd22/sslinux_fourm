<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65ae1e450ff6374032c33415/1hko2ch02';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <style>
        
        #searchBlogs{
           margin-top:-230px;
           margin-bottom:120px;
           color: #fff;
        }
        #searchBlogs input{
            padding:5px 100px;
            padding-left:10px;
            border-radius:50px;
            border-style:none;
            outline:none 
        }
        #searchBlogs input{
           
        }
        #searchBlogs button{
            border-style:none;
            background-color:#000;
            color:#fff; 
            padding:4px 10.33px;  
            margin-left:-83px;
            border-radius:50px
        }
        @import(max-width:1050px){
            #bannerImg{
                display:none;
            }
            #searchBlogs{
             margin-top:-150px;
             margin-bottom:120px;
        }
        }
        #Blogs{
            background-color:#f1f1f1;
            border-radius:5px;
            border:1px solid #035ca8;
        }
        #descWidth{
            width: 40vw;
           
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
    </div>

    <div>
        <img src="images/forumBg.jpg" class="img-fluid img-responsive" alt="" width="100%" height="20%" id="bannerImg">
        <div class="text-center"  id="searchBlogs">
            <h2>Our Support Center</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, eius?</p>
            <div>
            <form action="" method="get">
            <div>
                        <select name="category" id="category" class="form-select my-2" style="padding:5px 30px;border-radius:20px">
                            <option value="" selected>Categories</option>
                            <option value="zimbra">Zimbra Mail Server</option>
                            <option value="zextras">zextras Carbonio Mail server</option>
                            <option value="cpanel">Cpanel</option>
                            <option value="plesk">Plesk</option>
                            <option value="cwp">CWP</option>
                            <option value="jboss">JBoss</option>
                            <option value="ssl">SSL</option>
                            <option value="os-ticket">OS Ticket</option>
                            <option value="windows">Windows</option>
                            <option value="anti-spamcloud">Anti Spamcloud</option>
                            <option value="general">General</option>
                        </select>
                    </div>
                    
                    <input type="text"  name="search" placeholder="Search posts" aria-label="Search posts" aria-describedby="button-addon2">
                   
                        <button  type="submit" id="button-addon2">Search</button>
                 
            </form>
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
                
                <div class="col-12 my-4">
                <p>
                        <a class="btn btn-success float-right" href="addpost.php">Add Post</a>
                    </p>
                </div>
                

                <div class="col-12" >
                    
                <?php
                            // Database Connection
                            $connection = mysqli_connect("localhost", "root", "");
                            $db = mysqli_select_db($connection, "sixth_star_forum");

                            // Search Term and Category
                            $search = isset($_GET['search']) ? $_GET['search'] : '';
                            $search = mysqli_real_escape_string($connection, $search);
                            $category = isset($_GET['category']) ? $_GET['category'] : '';
                            $category = mysqli_real_escape_string($connection, $category);

                            // SQL Query with Search and Category Conditions
                            $sql = "SELECT * FROM posts WHERE (title LIKE '%$search%' OR description LIKE '%$search%')";
                            if (!empty($category)) {
                                $sql .= " AND category = '$category'";
                            }
                            $sql .= " ORDER BY id DESC";

                            $run = mysqli_query($connection, $sql);
                            $id = 1;
                            while ($row = mysqli_fetch_array($run)) {
                                $uid = $row['id'];
                                $title = $row['title'];
                                $description = $row['description'];
                                $postDate = $row['postDate'];
                                ?>

                                 
<style>
#blogCard{
    margin: 10px;
    border-radius: 10px;
}
#postDate{
    font-size:13px
}
#blogBody{
    margin:20px 10px;
}
</style>

<div class="card" id="blogCard">
                                    <div class="card-body">
                                        <div>
                                            <img src="images/sixthstar-linux2-removebg-preview.png" alt="" width="80px">
                                            <p class="float-right badge badge-primary" id="postDate">posted on
                                        <?php echo $postDate ?></p>
                                        </div>
                                    <div id="blogBody">
                                    <h2>
                                            <?php echo $title ?>
                                        </h2>
                                        <p >
                                            <?php echo $description ?>
                                        </p>
                                        
                                    </div>
                                    <div class="float-right">
                                    <a href='updatePost.php?id=<?php echo $uid; ?>'class="btn btn-primary">Update</a>
                                        <a href='Delete.php?rn=<?php echo $uid; ?>' type="submit" name="delete" class="btn btn-danger" >Delete</a>
                                       
                                    </div>
                                    </div>
                                </div>     
                                            
                                        </td>
                                        
                                   </tr>
                                    <?php $id++; } ?>
                          
                        
                </div>

            </div>
        </div>
    </div>
</body>

</html>