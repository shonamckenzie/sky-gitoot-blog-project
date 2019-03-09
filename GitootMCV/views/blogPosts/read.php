<p>This is the requested blog:</p>

<p>Blog ID: <?php echo $blogPost->id; ?></p>
<p>Title: <?php echo $blogPost->postTitle; ?></p>
<p>Description: <?php echo $blogPost->postDescription; ?></p>
<p>Content: <?php echo $blogPost->postContent; ?></p>
<p>Category: <?php echo $blogPost->postCategory; ?></p>
<p>Author: <?php echo $blogPost->postAuthor; ?></p>
<p>Date: <?php echo $blogPost->postDate; ?></p>



<?php 
$file = 'views/images/' . $blogPost->postTitle . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
