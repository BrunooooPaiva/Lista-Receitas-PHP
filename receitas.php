<?php
     include_once("templates/header.php");

     session_start();

     if(empty($_SESSION['receitas'])) {
          $_SESSION['receitas'] = [];

     }

     if(empty($_SESSION['areas'])) {
          $_SESSION['areas'] = [];

     }

     $nomeReceita = $_SESSION['receitas'];
     $descriptionReceita = $_SESSION['areas'];


?>

<section class="receitas-card">
     <?php foreach($nomeReceita as $index => $nome): ?>
     <?php $class = (strlen($nome) > 20) ? 'large' : ''; ?>

          <div class="card <?php echo $class; ?>" >
               <img src="<?php echo $BASE_URL ?>/img/comida.png" alt="">  
                    <div>
                         <h1><?php echo $nome ?></h1>
                         <?php $description = isset($descriptionReceita[$index]) ? $descriptionReceita[$index] : "" ?>
                         <?php if(empty($description)): ?>
                                   <h2>Sem descrição</h2>
                         <?php else : ?>
                                   <h2>Com descrição</h2>     
                         <?php endif; ?>
                         <a href="<?php echo $BASE_URL ?>/detalhes.php?id=<?php echo $index ?>">
                              <button>Saiba mais</button> 
                         </a>
                    </div>
          </div>
     <?php endforeach; ?>
</section>

<?php
     include_once("templates/footer.php");
?>
