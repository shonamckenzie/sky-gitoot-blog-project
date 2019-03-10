<p>Fill in the following form to update an existing product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Item</h2>
    <p>
        <input class="w3-input" type="text" name="title" value="<?= $blogPost->title; ?>">
        <label>Title</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="description" value="<?= $blogPost->description; ?>" >
        <label>Description</label>
    </p>
     <p>
        <input class="w3-input" type="text" name="content" value="<?= $blogPost->content; ?>">
        <label>Content</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="category" value="<?= $blogPost->category; ?>" >
        <label>Category</label>
    </p> 
    <p>
        <input class="w3-input" type="text" name="author" value="<?= $blogPost->author; ?>">
        <label>Author</label>
    </p>
    <p>
        <input class="w3-input" type="date" name="date" value="<?= $blogPost->date; ?>" >
        <label>Date</label>
    </p> 
    <p>
        <input class="w3-input" type="text" name="location" value="<?= $blogPost->location; ?>" >
        <label>Date</label>
    </p> 
    
    
    
    
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
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
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Blog">
    </p>
</form>