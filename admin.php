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
  header('Location:forms.php');

}

  





?>
