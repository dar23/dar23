<?php 

if(isset($_POST['main_text'])&& !empty($_FILES['main_file']['name'])){


  $title=$_POST['main_title'];
  $article=$_POST['main_text'];
  $picture=basename($_FILES['main_file']['name']);
  
  $direction_main="main/";
  $targetFilePath = $direction_main.$picture;

  move_uploaded_file($_FILES["main_file"]["tmp_name"], $targetFilePath);



$sql = "INSERT INTO posts (title,articles,pictures)
VALUES ('$title', '$article','$picture')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:index.php');

}


if(isset($_POST['humor_title']) && !empty($_FILES['humor_file']['name'])){

  $title_humor=$_POST['humor_title'];
  $article_humor=$_POST['humor_text'];
  $picture_humor=basename($_FILES['humor_file']['name']);
  $direction_main="humor_post/";
  $targetFilePath = $direction_main.$picture_humor;    

  move_uploaded_file($_FILES["humor_file"]["tmp_name"], $targetFilePath);


  $small = imagecreatetruecolor(640, 480); //czarny obrazek - matryca gdzie ma się zapisywać 

  $source = imagecreatefromjpeg($targetFilePath); //obtazek źródłowy

  $original_dimensions = getimagesize($targetFilePath);
  $width = $original_dimensions[0];
  $height = $original_dimensions[1];

  imagecopyresized($small, $source, 0, 0, 0, 0, 640, 480, $width, $height);


  imagejpeg($small, 'processed/'.$picture_humor);


  
$sql_humor = "INSERT INTO humor_post (title,articles,pictures)
VALUES ('$title_humor', '$article_humor','$picture_humor')";



if ($conn->query($sql_humor) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_humor . "<br>" . $conn->error;
}

header('location:memy.php');

}





















?>
