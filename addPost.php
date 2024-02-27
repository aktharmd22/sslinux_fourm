<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sixth_star_forum");

    if(isset($_POST['submit']))
        {
          $title = $_POST['title'];
          $description = $_POST['description'];
        

           $sql = "insert into posts(title,description)values(' $title',' $description')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("adminpanel.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <style>
        .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 300px;
            }
    </style>

        <div class="container my-5">
            <div class="row">
                 <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h1> Add Posts </h1>
                    </div>
                    <div class="card-body">

                    <form action="addPost.php" method="post">
                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter Blog Title"> 
                        </div>

                        <div class="form-group">
                            <label>Blog Description</label>
                            <textarea id="editor" type="text" name="description" class="form-control"  placeholder="Enter Blog Description"></textarea> 
                        </div>

                        <br/>
                        <input type="submit" class="btn btn-primary float-right" name="submit" value="Post Blog" >
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
          ckfinder:
          {
            uploadUrl: 'fileupload.php'
          }
        })
        .then(editor => {
          console.log(editor);
        })
        .catch( error => {
            console.error( error );
        });
</script>
