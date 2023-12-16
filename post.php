<?php
     include_once("templates/header.php");

     session_start();


     if(!isset($_SESSION['receitas'])) {
          $_SESSION['receitas'] = [];
     }

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          if(!empty($_POST['receita'])) {
               array_push($_SESSION['receitas'], $_POST['receita']);
          } 
     }

     if(!isset($_SESSION['areas'])) {
          $_SESSION['areas'] = [];
     }

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          if(!empty($_POST['area'])) {
               array_push($_SESSION['areas'], $_POST['area']);
          } 
     }

     
?>
<section class="form-container"> 
     <div class="container-post">
          <form action="#" METHOD="POST">
               <h1>Receita</h1>
               <p>Preencha o formulário abaixo com as informações necessárias para fazer a receita</p>
               <div class="input-single">
                    <input type="text" name="receita" id="nome-box" class="input" required>
                    <label for="nome-box">Nome da Receita</label>
               </div>
               <textarea name="area" class="textarea" cols="50" rows="10" placeholder="Descrição da receita"></textarea>
               <div class="btn-post">
                    <a href="<?php echo $BASE_URL ?>receitas.php">
                        <button>ENVIAR</button>
                    </a>
               </div>
          </form>
     </div>

</section>

<?php
     include_once("templates/footer.php");
?>
