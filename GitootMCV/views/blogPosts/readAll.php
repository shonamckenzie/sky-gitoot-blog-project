<p>Here is a list of all blogs:</p>

<?php foreach($blogPosts as $blogPost) { ?>
  <p>
    <?php echo $blogPost->title; ?> &nbsp; &nbsp;
    <?php echo $blogPost->description; ?>
    <a href='?controller=blogPost&action=read&id=<?php echo $blogPost->id; ?>'>See Full Blog</a> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=delete&id=<?php echo $blogPost->id; ?>'>Delete Blog</a> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=update&id=<?php echo $blogPost->id; ?>'>Edit Blog</a> &nbsp;
  </p>
<?php } ?>

********************NEW ONE*******************

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
<div id="blogs" class="container text-center">
        <p>Here is a list of all blogs:</p>
        <?php foreach($blogPosts as $blogPost) { ?>
  <p>
    <?php echo $blogPost->title; ?> &nbsp; &nbsp;
    <?php echo $blogPost->description; ?>
    <a href='?controller=blogPost&action=read&id=<?php echo $blogPost->id; ?>'>See Full Blog</a> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=delete&id=<?php echo $blogPost->id; ?>'>Delete Blog</a> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=update&id=<?php echo $blogPost->id; ?>'>Edit Blog</a> &nbsp;
  </p>
<?php } ?>
    </body>
</html>
