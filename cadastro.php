<?php
  $fileName="livro-de-visitas.txt";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = strip_tags(trim($_POST["name"]));
   $currentData = file_exists($fileName) ? file($fileName, FILE_IGNORE_NEW_LINES) : [];
  $nextId = count($currentData) + 1;  // Incrementa o número do ID
  file_put_contents($fileName, $nextId."|".$name."|", FILE_APPEND);
  header("Location: questao1.html");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Cadastro do nome</title>
  </head>
  <body class="fundo">
    <div class="container areaGeral">
      <h1 class="titulos">Cadastrando usuário</h1>
      <img src="imagens/logo_escola.jpg" style="margin: 50px;"><br>
      <form method="post" action="">
        <div>
          <input type="text" name="name" id="name" class="cadastro" placeholder="Ex.: João Silva"/>
        </div>
        <div>
          <button type="submit" class="btnNormal">Next</button>
        </div>
      </div>
      <script>
  document.querySelector('form').addEventListener('submit', function(event) {
    var nameField = document.getElementById('name');
    if (nameField.value.trim() === '') {
      event.preventDefault(); // Impede o envio do formulário
      alert('Por favor, insira um nome válido!');
    }
  });
</script>

    </form>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>