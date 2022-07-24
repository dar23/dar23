<?php 

if(isset($_POST['main_text'])&& !empty($_FILES['main_file']['name'])){


  $title=$_POST['main_title'];
  $article=$_POST['main_text'];
  $picture=basename($_FILES['main_file']['name']);
  $direction_main="main/";
  $targetFilePath = $direction_main.$picture;

  move_uploaded_file($_FILES["main_file"]["tmp_name"], $targetFilePath);

  $black_target = imagecreatetruecolor(500, 300); // Zwraca czarny obraz - jest to matryca

  
  $image = imagecreatefromjpeg($targetFilePath); // uchwyt do obrazka źródłowego jpg

 
 
  //get new sizes

  $width = imagesx($image); // pobranie szerokości 
  $height = imagesy($image); // pobranie wysokości
 

//resize 

  imagecopyresampled($black_target, $image, 0, 0, 0, 0,500,300,$width,$height);
 

// output

  imagejpeg($black_target, 'main/'.$picture);



$sql = "INSERT INTO posts (title,articles,pictures)
VALUES ('$title', '$article','$picture')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:index.php');

}
// pobieranie obrazka i skalowanie go do rozmiarów 500 na 600 (taki będzie w obrazie głównym).
// Następnie ustalenie w css rozmiarów mini dla obrazków galerii (pomniejszenie obrazka w css dla galerii)


if(isset($_POST['humor_title']) && !empty($_FILES['humor_file']['name'])){

  $title_humor=$_POST['humor_title']; // pobranie tytułu 
  $article_humor=$_POST['humor_text']; //pobranie artykułu
  $picture_humor=basename($_FILES['humor_file']['name']); // pobranie obrazka 
  $direction_main="processed/";  // folder w którym zapisuje się obrazek
  $targetFilePath = $direction_main.$picture_humor;    // ścieżka zapisania obrazka

  move_uploaded_file($_FILES["humor_file"]["tmp_name"], $targetFilePath); // zapisywanie obrazka od źródła do miejsca docelowego


 //load

  $black_target = imagecreatetruecolor(500, 600); // Zwraca czarny obraz - jest to matryca

  
  $image = imagecreatefromjpeg($targetFilePath); // uchwyt do obrazka źródłowego jpg

 
 
  //get new sizes

  $width = imagesx($image); // pobranie szerokości 
  $height = imagesy($image); // pobranie wysokości
 

//resize 

  imagecopyresampled($black_target, $image, 0, 0, 0, 0,500, 600,$width,$height);
 

// output

  imagejpeg($black_target, 'processed/'.$picture_humor);






  
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
