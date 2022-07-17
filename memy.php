<?php  require("connection.php");

?>



<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="stylesheet" href="style/memy.css">

<body>


<?php



  $sql_humor = "SELECT DISTINCT * FROM humor_post";
  $result=$conn->query($sql_humor);
  

echo '<div class="place_to_posts">';  

while($row = mysqli_fetch_array($result)){
  
    $rowtitle=$row['title'];

    $rowwith=$row['articles'];

echo "<div class='main_post'>"
  
      .'<div class="photo">'
      ."<div class='title'>".'<p class="pe">'.mb_strimwidth("$rowtitle",0,35,"...").'</p>'. "</div>"
      
      .'<img src="humor_post/'.$row["pictures"].'">'
      .'</div>'
      ."</div>";
     
 
      
    }

  
echo '</div>'; 














?>
































</body>



































</head>