<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>English Quiz - Science Space</title>

    <script>
      function validaResposta(){
        
        let resposta = document.querySelector('input[name="questao3"]:checked');
              
              if (!resposta) 
                  alert("Selecione uma resposta");
               else 
                  document.getElementById("questao3").submit();
              
      }
        
    </script>
  </head>
  <body class="fundo">
    <?php
       session_start();
       $_SESSION["q2"]=$_POST["questao2"];
    ?>
    <div class="container areaGeral">
        <div class="row justify-content-md-center">
          <h1 class="titulos" style="font-size: 50px;">Question 3</h1>
        </div>
          <div class="row justify-content-md-center">
          <h4 class="format-text-h1">Who studies space?</h4>
        </div>
        <div class="row justify-content-md-center">
            <img src="imagens/image_preview.jpg" alt="Imagem-teste" class="img-format">
        </div>
        <form action="questao4.php" method="post" id="questao3">
        <div class="row">
            <label class="quiz-button">
              <input type="radio" name="questao3" value="1" style="display:none;">
              <div class="text-alternativas"><span class="bold">A)</span><span>Astronomer</span></div>
            </label>
        </div>
        <div class="row">
            <label class="quiz-button">
              <input type="radio" name="questao3" value="0" style="display:none;">
              <div class="text-alternativas"><span class="bold">B)</span><span>Biologist</span></div>
            </label>
        </div>
        <div class="row">
        <label class="quiz-button">
        <input type="radio" name="questao3" value="0" style="display:none;">
          <div class="text-alternativas"><span class="bold">C)</span><span>Geologist</span></div>
        </label>
      </div>
      <div class="row">
        <label class="quiz-button">
        <input type="radio" name="questao3" value="0" style="display:none;">
          <div class="text-alternativas"><span class="bold">D)</span><span>Doctor</span></div>
        </label>
      </div>
      <div class="row">
        <label class="quiz-button">
        <input type="radio" name="questao3" value="0" style="display:none;">
          <div class="text-alternativas"><span class="bold">E)</span><span>Oceanographer</span></div>
        </label>
      </div>
    <div class="row justify-content-md-center">
    <button type="button" class="btnNormal" onclick="validaResposta()">Next</button>
    </div>
    </form>
    </div>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>