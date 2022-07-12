


<?php 
require('connection.php');
require('admin.php');


$id_posta = $_GET['id'];

$sql_news="SELECT * FROM posts WHERE id='$id_posta'";
$result=$conn->query($sql_news);

      
echo '<div class="place_to_posts">';  

while($row = mysqli_fetch_array($result)){
  echo "<div class='main_post'>";
  
      echo '<div class="photo">';
      echo '<img src="main/'.$row["pictures"].'">'.'</a>';
      echo '</div>';

      echo "<div class='title'>" . $row['title'] . "</div>";
      echo "<div class='text'>" . $row['articles'] . "</div>";
      echo "</div>";
     
    }

  


echo '</div>'; 


?>