
<div id="wrapper">
    <form action='' method='post' >

        <p><label>Title</label><br />
            <input id="title" type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

        <p><label>Description</label><br />
            <textarea  id="desc" name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea></p>

        <p><label>Content</label><br />
            <textarea id="cont" name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea></p>

        <p><label>Author</label><br />
            <textarea  id="author" name='postAuthor' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postAuthor'];}?></textarea></p>

        <p><label>Publisher</label><br />
            <textarea  id="publisher" name='postPublisher' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postPublisher'];}?></textarea></p>

        <p><input type='submit' name='submit' value='Submit'></p>

    </form>

</div>
