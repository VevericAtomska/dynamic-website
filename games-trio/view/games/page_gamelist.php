<br>
		<div class="home-page"> <h1>-List Of Games-</h1>
			<div class="columns">
                <div class="search-engine">
                    <?php if (isset($_SESSION ["admin"]) || isset($_SESSION["user"])): ?>

                    <h3>Advanced Internal Search Engine</h3>

                    <form action="" method="get">
                        <span> Title: </span> <br><hr>
                        <input id="title" name='title' type="text" class="feedback-input" placeholder="Title">
                        <span> Author: </span> <br> <hr>
                        <input id="Author"  name="author" type="text" class="feedback-input" placeholder="Author">
                        <span> Publisher : </span> <br> <hr>
                        <input id="Uploader"  name="publisher" type="text" class="feedback-input" placeholder="Uploader">

                        <h3>Additional Options</h3> <hr>
                        <span> Keywords: </span> <br>
                        <input id="Keywords"  name="keywords" type="text" class="feedback-input" placeholder="Keywords">

                        <hr><br>

                        <input type="submit" name="" value="Search">

                    </form>
                </div>
                <?php advSearch(); ?>
                    <?php endif ?>

                <?php

                $sql = "SELECT postID, postTitle, postDesc,postCont,postAuthor,postPublisher, postDate 
                                    FROM blog_posts 
                                    ORDER BY postID DESC";
                $stmt =mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($stmt) ) {

                    echo '<div class="edit">';
                    echo '<h2><a href="index.php?page=viewpost' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
                    echo '<div class="games">';
                    echo '<div class="game-text"><p> ' . $row['postAuthor'] . '</p></div>';
                    echo '<div class="game-text"><p> ' . $row['postPublisher'] . '</p></div>';
                    echo '<div class="game-text">Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</div>';

                    echo '</div>';
                    echo '</div>';
                }
                ?>
			</div>
		</div>
		<div class="footer">
		</div>
	</body>
</html>