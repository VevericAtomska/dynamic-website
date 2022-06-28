
<br>
<div class="home-page"><h1>-Most Popular Games-</h1>
    <form method="get">
        <input class="search-text" type="text" name="inputSearch" placeholder="Type to search">
        <input class='fa fa-search' type="submit" name="" value="Search">

    </form>
    <div class="banners">
        <table>
            <td class="ads">
                <a href="https://www.instagram.com/stanijadobrojevic/" target="_blank">
                    <img src="<?= DIR_BANNERS . 'stanija.jpg' ?>">
                </a>
            </td>
            <td>
                <div class="columns">
                    <?php search() ?>
                    <?php advSearch() ?>
                    <?php if (isset($_SESSION['admin'])): ?>
                        <?php

                          include  DIR_MODULES . "include_post_entry.php";

                        $sql = "SELECT postID, postTitle, postDesc,postCont,postAuthor,postPublisher, postDate 
                                    FROM blog_posts 
                                    ORDER BY postID DESC";
                        $stmt =mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_assoc($stmt) ) {

                            echo '<div class="edit">';
                            echo '<h2><a href="index.php?page=viewpost' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
                            echo '<div class="games">';
                            echo '<div class="game-text"><p>' . $row['postDesc'] . '</p></div>';
                            echo '<div class="game-text">' . $row['postCont'] . '</div>';
                            echo '<div class="game-text"><p> ' . $row['postAuthor'] . '</p></div>';
                            echo '<div class="game-text"><p> ' . $row['postPublisher'] . '</p></div>';
                            echo '<div class="game-text">Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</div>';

                            echo '</div>';
                            echo '</div>';
                            include DIR_MODULES . 'include_del_post.php';
                            echo '<a href="index.php?del=' . $row['postID'] . '"><input type="button" value="Delete"/></a>';

                            include DIR_MODULES . "include_edit_post.php";
                            //include DIR_MODULES . "include_del_post.php";

                        };




                        ?>
                    <?php endif ?>


                            <?php

                            $sql = " SELECT postID, postTitle, postDesc,postCont,postAuthor,postPublisher, postDate 
                                    FROM blog_posts 
                                    ORDER BY postID DESC ";
                            $stmt =mysqli_query($connect,$sql);
                            while($row = mysqli_fetch_assoc($stmt) ) {

                                echo '<div class="edit">';
                                echo '<h2><a href="index.php?page=viewpost' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
                                echo '<div class="games">';
                                echo '<div class="game-text"><p>' . $row['postDesc'] . '</p></div>';
                                echo '<div class="game-text">' . $row['postCont'] . '</div>';
                                echo '<div class="game-text"><p> ' . $row['postAuthor'] . '</p></div>';
                                echo '<div class="game-text"><p> ' . $row['postPublisher'] . '</p></div>';
                                echo '<div class="game-text">Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</div>';

                                echo '</div>';
                                echo '</div>';
                            }
                                ?>



                </div>
            </td>
            <td class="ads">
                <a href="https://skillswheelacademy.com/" target="_blank">
                    <img src="<?= DIR_BANNERS . 'driving.jpg' ?>">
                </a>
            </td>
        </table>


    </div>
</div>
<div class="footer">
</div>
<script src="https://kit.fontawesome.com/6115c7bfa5.js" crossorigin="anonymous"></script>
</body>
</html>

