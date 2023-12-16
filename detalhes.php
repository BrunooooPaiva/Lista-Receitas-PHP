<?php
     include_once("templates/header.php");

     session_start();

     $index = isset($_GET['id']) ? $_GET['id'] : null;

     if($index !== null && isset($_SESSION['receitas'][$index])) {
          $nomeReceita = $_SESSION['receitas'][$index];
          $descriptionReceita = isset($_SESSION['areas'][$index]) ? $_SESSION['areas'][$index] : "";
     }

?>
<div class="detalhes-container">
     <img src="<?php echo $BASE_URL ?>/img/comidas.png" alt="Comidas">
     <div>
          <h1><?php echo $nomeReceita ?></h1>
          <p><?php echo nl2br($descriptionReceita) ?></p>
     </div>
</div>


<?php
     include_once("templates/footer.php");
?>