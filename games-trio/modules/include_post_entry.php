    <?php


    //if form has been submitted process it
    if(isset($_POST['submit'])){

        $_POST = array_map( 'stripslashes', $_POST );

        //collect form data
        extract($_POST);

        //very basic validation
        if($postTitle ==''){
           $error[] = "<p style='color:red; border:2px white solid;'>Please enter the title</p>";
        }

        if($postDesc ==''){
            $error[] = "<p style='color:red; border:2px white solid;'>Please enter the description</p>";

        }

        if($postCont ==''){
            $error[] = "<p style='color:red; border:2px white solid;'>Please enter the content</p>";

        }

        if($postAuthor ==''){
            $error[] = "<p style='color:red; border:2px white solid;'>Please enter the author</p>";

        }

        if($postPublisher ==''){
            $error[] = "<p style='color:red; border:2px white solid;'>Please enter the publisher</p>";

        }


        if(!isset($error)){


                //insert into database
                $stmt = "INSERT INTO blog_posts (postTitle,postDesc,postCont, postAuthor, postPublisher, postDate) 
                         VALUES ('$postTitle', '$postDesc', '$postCont', '$postAuthor', '$postPublisher', now()) " ;
                $results = mysqli_query($connect, $stmt);

                //redirect to index page
                header('Location: index.php?action=added');


                exit;

            }
        }

    //check for any errors
    if(isset($error)){
        foreach($error as $error){
            echo '<p class="error">'.$error.'</p>';
        }
    }
    include DIR_TEMPLATE . 'page_entry.php';
    ?>
