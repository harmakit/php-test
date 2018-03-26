<?php

$allowed =  array('jpg');
$filename = $_FILES['image']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext, $allowed)){
  echo 'Image should have .jpg extension';
}
else{
  $uploaddir = './images/';
  $sha1filename = (sha1($filename . (new DateTime)->getTimestamp() ));
  $newfilename = $sha1filename . '.' . $ext;
  $uploadfile = $uploaddir . basename($newfilename);

  include_once("db.php");
  $author = $_POST['author'];
  $comment = $_POST['comment'];
  if($result = $mysqli->query("INSERT INTO photos (author, photo, comment) VALUES('$author', '$sha1filename', '$comment')")){
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
      header("Location: /");
    } else {
      echo "Something gone wrong!\n";
    }
    echo 'Some debug info:';
    print_r($_FILES);
  }
  else{
    printf("%s", $mysqli->error);
  }
}

?>
