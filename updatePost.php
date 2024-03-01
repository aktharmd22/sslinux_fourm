<?php
include 'config.php'; // Ensure this file contains your database connection details

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the current post details
    $sql = "SELECT title, description, category FROM posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $post = $result->fetch_assoc();

    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        // Update the post
        $sql = "UPDATE posts SET title = ?, description = ?, category = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $description, $category, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Post updated successfully');</script>";
            header("Location: adminPanel.php");
            exit();
        } else {
            echo "<script>alert('Failed to update post');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1> Update Posts </h1>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Blog Title</label>
                                <input type="text" name="title" value="<?php echo $post['title']; ?>"
                                    class="form-control">
                            </div>

                            <div>
                                <select name="category" id="category" class="form-select my-3">
                                    <option value="" <?php echo ($post['category'] == '') ? 'selected' : ''; ?>>Categories</option>
                                    <option value="zimbra" <?php echo ($post['category'] == 'zimbra') ? 'selected' : ''; ?>>Zimbra Mail Server</option>
                                    <option value="zextras" <?php echo ($post['category'] == 'zextras') ? 'selected' : ''; ?>>zextras Carbonio Mail server</option>
                                    <option value="cpanel" <?php echo ($post['category'] == 'cpanel') ? 'selected' : ''; ?>>Cpanel</option>
                                    <option value="plesk" <?php echo ($post['category'] == 'plesk') ? 'selected' : ''; ?>>Plesk</option>
                                    <option value="cwp" <?php echo ($post['category'] == 'cwp') ? 'selected' : ''; ?>>CWP</option>
                                    <option value="jboss" <?php echo ($post['category'] == 'jboss') ? 'selected' : ''; ?>>JBoss</option>
                                    <option value="ssl" <?php echo ($post['category'] == 'ssl') ? 'selected' : ''; ?>>SSL</option>
                                    <option value="os-ticket" <?php echo ($post['category'] == 'os-ticket') ? 'selected' : ''; ?>>OS Ticket</option>
                                    <option value="windows" <?php echo ($post['category'] == 'windows') ? 'selected' : ''; ?>>Windows</option>
                                    <option value="anti-spamcloud" <?php echo ($post['category'] == 'anti-spamcloud') ? 'selected' : ''; ?>>Anti Spamcloud</option>
                                    <option value="general" <?php echo ($post['category'] == 'general') ? 'selected' : ''; ?>>General</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Blog Description</label>
                                <textarea name="description" id="editor"
                                    class="form-control" style="height: 200px;"><?php echo $post['description']; ?></textarea>
                            </div>
                            <br/>

                            <input type="submit" name="update" value="Update Post" class="btn btn-primary float-right">
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
