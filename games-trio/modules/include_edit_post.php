<?php
include DIR_TEMPLATE . 'page_edit.php';



//if form has been submitted process it
if(isset($_POST['submit'])){

    $error = '';

    $_POST = array_map( 'stripslashes', $_POST );

    //collect form data
    extract($_POST);

    //very basic validation

    if($postTitle ==''){
        $error = '';
    }

    if($postDesc ==''){
        $error = '';
    }

    if($postCont ==''){
        $error = '';
    }

    if($postAuthor ==''){
        $error = '';
    }

    if($postPublisher ==''){
        $error = '';
    }


    if(!isset($error)){

    //insert into database
    $stmt = "UPDATE blog_posts SET postTitle = ('$postTitle'),
             postDesc = ('$postDesc'), 
             postCont = ('$postCont'),
             postAuthor = ('$postAuthor'),
             postPublisher = ('$postPublisher')
             WHERE postID = ('$postID')";
    $results1 = mysqli_query($connect, $stmt);

    //redirect to index page
    header('Location: index.php?action=updated');

            exit;

    }

}
?>

