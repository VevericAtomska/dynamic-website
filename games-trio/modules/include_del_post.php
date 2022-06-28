<?php

if(isset($_GET['del'])) {
    $postID = $_GET['del'];
    mysqli_query($connect, "DELETE FROM `blog_posts` WHERE postID = $postID");
        $_SESSION['message'] = "Location deleted";
        header('Location: index.php?');



}


?>
