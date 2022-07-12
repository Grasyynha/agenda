<?php

  include_once("templates/header.php");

?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar contato</h1>
    <form action="<? $BASE_URL ?>config/process.php" method="POST">
     <input type="hidden" name="type" value="create">
     <div class="form-group">
      <label for="name">Nome do contato:</label><br>
      <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required><br>
     </div>  
     <div class="form-group">
      <label for="phone">Telefone do contato:</label><br>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required><br>
     </div>  <div class="form-group">
      <label for="observations">Observações:</label><br>
      <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações"><br></textarea>
     </div> 

  <button type="submit" class="btn btn-primary">Cadastrar</button>
<?php
  include_once("templates/footer.php");

?>