<?php
  class blogPost {

    // we define 7 attributes
    public $id;
    public $title;
    public $description;
    public $content;
    public $category;
    public $author;
    public $date;
    public $location;

    public function __construct($id, $title, $description, $content, $category, $author, $date, $location) {
      $this->id    = $id;
      $this->title  = $title;
      $this->description = $description;
      $this->content = $content;
      $this->category = $category;
      $this->author = $author;
      $this->date = $date;
      $this->location = $location;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM blogPost');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $blogPost) {
          $list[] = new blogPost($blogPost['id'], $blogPost['title'], 
                  $blogPost['description'], $blogPost['content'], 
                  $blogPost['category'], $blogPost['author'], $blogPost['date'], $blogPost['location']);
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
      return new blogPost ($blogPost['id'], $blogPost['title'], $blogPost['description'], 
              $blogPost['content'], $blogPost['category'], $blogPost['author'], $blogPost['date'], $blogPost['location']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update blogPost set title=:title, "
            . "description=:description, content=:content, "
            . "category=:category, author=:author, date=:date,"
            . "location=:location"
            ." where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':description', $description);
    $req->bindParam(':content', $content);
    $req->bindParam(':category', $category);
    $req->bindParam(':author', $author);
    $req->bindParam(':date', $date);
    $req->bindParam(':location', $location);
    
    
// set name and price parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredtitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['description'])&& $_POST['description']!=""){
        $filtereddescription = filter_input(INPUT_POST,'description', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredcontent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['category'])&& $_POST['category']!=""){
        $filteredcategory = filter_input(INPUT_POST,'category', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['author'])&& $_POST['author']!=""){
        $filteredautor = filter_input(INPUT_POST,'author', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['date'])&& $_POST['date']!=""){
        $filtereddate = filter_input(INPUT_POST,'date', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['location'])&& $_POST['location']!=""){
        $filteredlocation = filter_input(INPUT_POST,'location', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    
    
$title = $filteredtitle;
$description = $filtereddescription;
$content = $filteredcontent;
$category = $filteredcategory;
$author = $author;
$date = $filtereddate;
$location = $filteredlocation;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['title'])) {
		Product::uploadFile($title);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blogPost(title, description, "
            . "content, category, author, date) "
            . "values (:title, :description, :content, :category, :author, :date), :location");
    $req->bindParam(':title', $title);
    $req->bindParam(':description', $description);
    $req->bindParam(':content', $content);
    $req->bindParam(':category', $category);
    $req->bindParam(':author', $author);
    $req->bindParam(':date', $date);
    $req->bindParam(':location', $location);
    
// set parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredtitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['description'])&& $_POST['description']!=""){
        $filtereddescription = filter_input(INPUT_POST,'description', FILTER_SANITIZE_SPECIAL_CHARS);
    }
     if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredcontent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['category'])&& $_POST['category']!=""){
        $filteredcategory = filter_input(INPUT_POST,'category', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['author'])&& $_POST['author']!=""){
        $filteredauthor = filter_input(INPUT_POST,'author', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['date'])&& $_POST['date']!=""){
        $filtereddate = filter_input(INPUT_POST,'date', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['location'])&& $_POST['location']!=""){
        $filtereddate = filter_input(INPUT_POST,'location', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    
    
$title = $filteredtitle;
$description = $filtereddescription;
$content = $filteredcontent;
$category = $filteredcategory;
$author = $filteredauthor;
$date = $filtereddate;
$location = $filteredlocation;
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