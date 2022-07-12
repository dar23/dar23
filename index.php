<?php  require("connection.php");

require('logowanie.php');


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/hamburger.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/logowanie.css">
    <link rel="stylesheet" href="style/main_post.css">
    <link rel="stylesheet" href="style/news.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/6d745535f9.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />






<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

<div class="hamburger">
<div class="hamburger_one"></div>
<div class="hamburger_two"></div>
<div class="hamburger_three"></div>
</div>





<nav>
 
   





 
<ul>
 <!--   <a href="index.php"class="active"><span class='fa fa-home'
         style="margin:10px 19px ; transform:scale(1.2);  "></span>Dariusz Hozer</a>
-->



  <!---------------------------------------------------------------------------------------> 
  <li >
  <ol>
        <li><a href="cross_fit">Cross-Fit</a></li>
        <li><a href="bieganie">Bieganie</a></li>
        <li><a href="metody_treningowe">Metody treningowe</a></li>
    </ol>
  
  <a href="treningi.php"><span id="run" class="material-symbols-outlined" >directions_run</span>Trening</a>

  </li> 
<!---------------------------------------------------------------------------------------> 
  <li>
  
    <ol>
        <li><a href="memy">Memy</a></li>
        <li><a href="filmy">Filmy</a></li>
        <li><a href="gify">Gify</a></li>
    </ol>
  
  <a href="humor.php"><span class="material-symbols-outlined">sentiment_satisfied</span>&nbsp;Humor</a> 

  </li>
   <!---------------------------------------------------------------------------------------> 

  <li>
    
  <ol>
        <li><a href="topowe">Topowe kawałki</a></li>
        <li><a href="80">Lata 90 </a></li>
        <li><a href="90">Lata 80 </a></li>
  </ol>

  <a href="muzyka.php"><span class="material-symbols-outlined">music_note</span>Muzyka</a>

</li>
 <!---------------------------------------------------------------------------------------> 

<li> 
    <ol>
        <li><a href="podstawy">Kurs Javascript</a></li>
        <li><a href="praktyczne">Kurs php i mysql</a></li>
        <li><a href="programy">Programy</a></li>
    </ol>
   
  
  <a href="php_8.php"> <span class="material-symbols-outlined" style="transform:scale(1.2)">computer</span>Kursik</a>
 
</li>

 
  <!---------------------------------------------------------------------------------------> 

 
 <li>
    
    <ol>
        <li><a href="astronomia">Astronomia</a></li>
        <li><a href="technologia">Technologia</a></li>
        <li><a href="ciekawostki">Ciekawostki</a></li>
    </ol>
  
  <a href="nauka.php"><span class="material-symbols-outlined">rocket_launch</span>Nauka</a>


</li>

<li>
    
    <ol>
          <li><a href="www">Strony</a></li>
          <li><a href="aplikacje">Aplikacje</a></li>
          <li><a href="programy">Programy</a></li>
      </ol>
    
      <a href="portfolio.php"><span class="material-symbols-outlined">folder</span> Portfolio</a>
    </li>
<!---------------------------------------------------------------------------------------> 



 <!--7 li --> <li>
  
    <a href="o_sobie.php">
      <span class="material-symbols-outlined">contacts</span>O mnie</a>  
    </li>

   <!--8 li --> <li>
    <a href="kontakt.php">
      <span class="material-symbols-outlined">mail</span> Kontakt</a>
  </li>

   <!--9 li --> <li class="button_admin">
    <a>
      <span class="material-symbols-outlined">admin_panel_settings</span>Kierownik</a>
   </li>



</ul>



</nav>    


<!-- główna strona -->  


    <div id="panel">
        <form method="post">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
            <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
            <input type="submit" value="Login" name="submit_login">
            </div>  
        </form>
     </div>    


      <?php

    
      require('admin.php');
      

        $sqli = "SELECT DISTINCT * FROM posts";
        $result=$conn->query($sqli);
       
 echo '<div class="place_to_posts">';  

      while($row = mysqli_fetch_array($result)){
        echo "<div class='main_post'>";
        
            echo '<div class="photo">';
            echo '<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'">'.'</a>';
            echo '</div>';

            echo "<div class='title'>" . $row['title'] . "</div>";
            echo "<div class='text'>" . $row['articles'] . "</div>";
            echo "</div>";
           
          }
 
        


   echo '</div>'; 
      ?>


<script src="js/icon.js"></script>

<script src="js/logowanie.js"></script>

<script src="js/hamburger.js"></script>


























</body>
</html>