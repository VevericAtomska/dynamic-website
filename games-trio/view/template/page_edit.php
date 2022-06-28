
<div id="wrapper">
    <form action='' method='post'>
        <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

        <p><label>Title</label><br />
            <input type='text' name='postTitle' value='<?php echo $row['postTitle'];?>'></p>

        <p><label>Description</label><br />
            <textarea  name='postDesc' cols='60' rows='10'><?php echo $row['postDesc'];?></textarea></p>

        <p><label>Content</label><br />
            <textarea   name='postCont' cols='60' rows='10'><?php echo $row['postCont'];?></textarea></p>

        <p><label>Author</label><br />
            <textarea  name='postAuthor' cols='60' rows='10'><?php echo $row['postAuthor'];?></textarea></p>

        <p><label>Publisher</label><br />
            <textarea  name='postPublisher' cols='60' rows='10'><?php echo $row['postPublisher'];?></textarea></p>

        <p><input type='submit' name='submit' value='Update'></p>

    </form>

</div>

</body>
</html>

