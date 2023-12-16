<?php
     include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo $BASE_URL ?>css/styles.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Pacifico&display=swap" rel="stylesheet">
     <title>Delícias de Casa</title>
</head>
<body>

<header>
     <a class="logo-link" href="<?php echo $BASE_URL ?>">
          <img src="<?php echo $BASE_URL ?>/img/logo.png" alt="Logo">
     </a>
     <nav class="navbar">
          <ul class="navbar-list">
               <li><a href="<?php echo $BASE_URL ?>">Home</a></li>
               <li><a href="<?php echo $BASE_URL ?>receitas.php">Receitas</a></li>
               <li><a href="#">Sobre</a></li>
          </ul>      
     </nav>
</header>