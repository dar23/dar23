
<?php require ('connection.php') ;
require('admin.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style\admin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@700&display=swap" rel="stylesheet">

<title>Panel admina</title>
</head>
<body>
    
<div class="panel">

<form method="post" enctype="multipart/form-data" class="form_zero">
    <div class="main">GŁÓWNA STRONA</div>
    <input type="text" name="main_title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="main_text"></textarea>
        <input type="file" name="main_file"></input> 
        <input type="submit" name="submit"></input> 
</form>


<form method="post"  enctype="multipart/form-data" class="form_one">
    <div class="main">KURS PHP</div>
    <input type="text" name="title"  placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text" placeholder="podstawy php"></textarea>
        <textarea type="text" name="text" placeholder="praktyczne php"></textarea>
        <textarea type="text" name="text" placeholder="programy php"></textarea>



        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>



<form method="post"  enctype="multipart/form-data">
    <div class="main">KURS JS</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text" placeholder="podstawy js"></textarea>
        <textarea type="text" name="text" placeholder="praktyczne js"></textarea>
        <textarea type="text" name="text" placeholder="programy js"></textarea>


        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>


<form method="post"  enctype="multipart/form-data">
    <div class="main">TRENINGI</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>



<form method="post"  enctype="multipart/form-data">
    <div class="main">HUMOR</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>



<form method="post"  enctype="multipart/form-data">
    <div class="main">MUZYKA</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>




<form method="post"  enctype="multipart/form-data">
    <div class="main">NAUKA</div>
    <input type="text" name="title" placeholder="tytuł nagłówka" ></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>


<form method="post"  enctype="multipart/form-data">
    <div class="main">PORTFOLIO</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>




<form method="post"  enctype="multipart/form-data">
    <div class="main">EMAIL</div>
    <input type="text" name="title" placeholder="tytuł nagłówka"></input> 
        <textarea type="text" name="text"></textarea>
        <input type="file" name="file"></input> 
        <input type="submit" name="submit"></input> 
</form>






















</div>



<script src="js/panel.js"></script>





</body>
</html>