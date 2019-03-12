<p>This is the requested blog:</p>

<p>Blog ID: <?php echo $blogPost->id; ?></p>
<p>Title: <?php echo $blogPost->title; ?></p>
<p>Description: <?php echo $blogPost->description; ?></p>
<p>Content: <?php echo $blogPost->content; ?></p>
<p>Category: <?php echo $blogPost->category; ?></p>
<p>Author: <?php echo $blogPost->author; ?></p>
<p>Date: <?php echo $blogPost->date; ?></p>
<p>location: <?php echo $blogPost->location; ?></p>


<?php 
$file = 'views/images/' . $blogPost->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	


*********************NEW ONE********************************


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <div id="requestedBlog" class="container text-center">       
        <p>This is the requested blog:</p>

<p>Blog ID: <?php echo $blogPost->id; ?></p>
<p>Title: <?php echo $blogPost->title; ?></p>
<p>Description: <?php echo $blogPost->description; ?></p>
<p>Content: <?php echo $blogPost->content; ?></p>
<p>Category: <?php echo $blogPost->category; ?></p>
<p>Author: <?php echo $blogPost->author; ?></p>
<p>Date: <?php echo $blogPost->date; ?></p>
<p>location: <?php echo $blogPost->location; ?></p>


        <?php 
$file = 'views/images/' . $blogPost->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
    </body>
</html>
