<p>Fill in the following form to create a new blog:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Blog</h2>
</div>
    <p>
        <label>Title</label>
        <input class="w3-input" type="text" name="title" required autofocus>
    </p>
        <p>
         <label>Description</label>   
        <input class="w3-input" type="text" name="description" required>
        
    </p>
    <p>
        <label>Content</label>
        <input class="w3-input" type="text" name="content" required>
        
    </p>
        <p>
         <label>Category</label>   
        <input class="w3-input" type="text" name="category" required>
    </p>
    <p>
        <label>Author</label>
        <input class="w3-input" type="text" name="author" required>
      
    </p>
        <p>
         <label>Date</label>   
         <input class="w3-input" type="date" name="date" required>
    </p>
     <p>
         <label>Date</label>   
         <input class="w3-input" type="location" name="location" required>
    </p>
    
    
    
    <!-- Commenting out the file upload until it works
            -->
  <!--<input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  -->
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Blog">
  </p>
</form>