<?php
     include_once("templates/header.php");
?>
<main class="home">
     <div class="container">
          <h1 class="home-title">Delícias de Casa</h1>
          <p>Onde cada receita é um convite para transformar sua casa em um verdadeiro festival de sabores!</p>
          <a href="<?php echo $BASE_URL ?>post.php">
               <button class="cssbuttons-io-button">
                    Criar nova receita
                    <div class="icon">
                    <svg
                         height="24"
                         width="24"
                         viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg"
                    >
                         <path d="M0 0h24v24H0z" fill="none"></path>
                         <path
                         d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                         fill="currentColor"
                         ></path>
                    </svg>
                    </div>
               </button>
          </a>
     </div>
     <img src="<?php echo $BASE_URL ?>/img/pratos.png" alt="Prato de comida">
</main>     
<?php
     include_once("templates/footer.php");
?>

