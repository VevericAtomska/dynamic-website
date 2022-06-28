<?php

$stmt ="SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = '$postID'";
$stmt= mysqli_stmt_execute(array('$postID' => $_GET['id']));
$row = mysqli_fetch_assoc($stmt);

//if post does not exists redirect user.
if($row['postID'] == ''){
    header('Location: index.php?=home');

    exit;
}

    echo '<div>';
    echo '<h1>'.$row['postTitle'].'</h1>';
    echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
    echo '<p>'.$row['postCont'].'</p>';
    echo '</div>';


    ?>