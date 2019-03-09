<p>Here is a list of all products:</p>

<?php foreach($blogPosts as $blogPost) { ?>
  <p>
    <?php echo $blogPost->postTitle; ?> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=read&id=<?php echo $blogPost->id; ?>'>See Full Blog</a> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=delete&id=<?php echo $blogPost->id; ?>'>Delete Blog</a> &nbsp; &nbsp;
    <a href='?controller=blogPost&action=update&id=<?php echo $blogPost->id; ?>'>Edit Blog</a> &nbsp;
  </p>
<?php } ?>