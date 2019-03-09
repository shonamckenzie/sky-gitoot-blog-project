<?php
  class blogPost {

    // we define 7 attributes
    public $id;
    public $postTitle;
    public $postDescription;
    public $postContent;
    public $postCategory;
    public $postAuthor;
    public $postDate;

    public function __construct($id, $postTitle, $postDescription, $postContent, $postCategory, $postAuthor, $postDate) {
      $this->id    = $id;
      $this->postTitle  = $postTitle;
      $this->postDescription = $postDescription;
      $this->postContent = $postContent;
      $this->postCategory = $postCategory;
      $this->postAuthor = $postAuthor;
      $this->postDate = $postDate;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM blogPost');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $blogPost) {
          $list[] = new blogPost($blogPost['id'], $blogPost['postTitle'], 
                  $blogPost['postDescription'], $blogPost['postContent'], 
                  $blogPost['postCategory'], $blogPost['postAuthor'], $blogPost['postDate']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM blogPost WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $blogPost = $req->fetch();
if($blogPost){
      return new blogPost ($blogPost['id'], $blogPost['postTitle'], $blogPost['postDescription'], 
              $blogPost['postContent'], $blogPost['postCategory'], $blogPost['postAuthor'], $blogPost['postDate']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update blogPost set postTitle=:postTitle, "
            . "postDescription=:postDescription, postContent=:postContent, "
            . "postCategory=:postCategory, postAuthor=:postAuthor, postDate=:postDate"
            ." where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':postTitle', $postTitle);
    $req->bindParam(':postDescription', $postDescription);
    $req->bindParam(':postContent', $postContent);
    $req->bindParam(':postCategory', $postCategory);
    $req->bindParam(':postAuthor', $postAuthor);
    $req->bindParam(':postDate', $postDate);
    
    
// set name and price parameters and execute
    if(isset($_POST['postTitle'])&& $_POST['postTitle']!=""){
        $filteredpostTitle = filter_input(INPUT_POST,'postTitle', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postDescription'])&& $_POST['postDescription']!=""){
        $filteredpostDescription = filter_input(INPUT_POST,'postDescription', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postContent'])&& $_POST['postContent']!=""){
        $filteredpostContent = filter_input(INPUT_POST,'postContent', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postCategory'])&& $_POST['postCategory']!=""){
        $filteredpostCategory = filter_input(INPUT_POST,'postCategory', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postAuthor'])&& $_POST['postAuthor']!=""){
        $filteredpostAuthor = filter_input(INPUT_POST,'postAuthor', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postDate'])&& $_POST['postDate']!=""){
        $filteredpostDate = filter_input(INPUT_POST,'postDate', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    
    
    
$postTitle = $filteredpostTitle;
$postDescription = $filteredpostDescription;
$postContent = $filteredpostContent;
$postCategory = $filteredpostCategory;
$postAuthor = $filteredpostAuthor;
$postDate = $filteredpostDate;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['postTitle'])) {
		Product::uploadFile($postTitle);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blogPost(postTitle, postDescription, "
            . "postContent, postCategory, postAuthor, postDate) "
            . "values (:postTitle, :postDescription, :postContent, :postCategory, :postAuthor, :postDate)");
    $req->bindParam(':postTitle', $postTitle);
    $req->bindParam(':postDescription', $postDescription);
    $req->bindParam(':postContent', $postContent);
    $req->bindParam(':postCategory', $postCategory);
    $req->bindParam(':postAuthor', $postAuthor);
    $req->bindParam(':postDate', $postDate);
    
// set parameters and execute
    if(isset($_POST['postTitle'])&& $_POST['postTitle']!=""){
        $filteredpostTitle = filter_input(INPUT_POST,'postTitle', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postDescription'])&& $_POST['postDescription']!=""){
        $filteredpostDescription = filter_input(INPUT_POST,'postDescription', FILTER_SANITIZE_SPECIAL_CHARS);
    }
     if(isset($_POST['postContent'])&& $_POST['postContent']!=""){
        $filteredpostContent = filter_input(INPUT_POST,'postContent', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postCategory'])&& $_POST['postCategory']!=""){
        $filteredpostCategory = filter_input(INPUT_POST,'postCategory', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postAuthor'])&& $_POST['postAuthor']!=""){
        $filteredpostAuthor = filter_input(INPUT_POST,'postAuthor', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['postDate'])&& $_POST['postDate']!=""){
        $filteredpostDate = filter_input(INPUT_POST,'postDate', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    
    
    
$postTitle = $filteredpostTitle;
$postDescription = $filteredpostDescription;
$postContent = $filteredpostContent;
$postCategory = $filteredpostCategory;
$postAuthor = $filteredpostAuthor;
$postDate = $filteredpostDate;
$req->execute();
    }
//upload product image
/*blogPost::uploadFile($postTitle);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $postTitle) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/Gitoottest/views/images/";
	$destinationFile = $path . $postTitle . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
*/
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM blogPost WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
?>