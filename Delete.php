<?php

include 'config.php';
error_reporting(0);
$uid=$_GET['rn'];

$query="DELETE FROM posts WHERE id='$uid'";
$data=mysqli_query($conn,$query);

if($data)
{
    header('Location: adminPanel.php');
    
}
else{
    echo "Delete Failed";
}

           

?>