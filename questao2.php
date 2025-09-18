<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Question 2</title>

    <script>
      function validaResposta(){
        
        let resposta = document.querySelector('input[name="questao2"]:checked');
              
              if (!resposta) 
                  alert("Selecione uma resposta");
               else 
                  document.getElementById("questao2").submit();
              
      }
        
    </script>
  </head>
  <body class="fundo">
    <!---Trecho php que cria uma session com a resposta 
    do form anterior-->
    <?php
       session_start();
       $_SESSION["q1"]=$_POST["questao1"];
    ?>
    <div class="container areaGeral">
      <div class="areaBarraProgresso">
        <progress class="barraProgresso" value="25" max="100"></progress>
      </div>
        <div class="row justify-content-md-center">
          <h1 class="titulos">Question 2</h1>
        </div>
          <div class="row justify-content-md-center">
          <h4 class="format-text-h1" style="font-size: 40px">How does an eclipse happen?</h4>
        </div>
        <div class="row justify-content-md-center">
            <img src="imagens/eclipse.jpg" alt="Imagem-teste" class="img-format">
        </div>
        <form action="questao3.php" method="post" id="questao2">
        <div class="row">
            <label class="quiz-button">
              <input type="radio" name="questao2" value="0" style="display:none;">
              <div class="text-alternativas"><span class="bold">A)</span><span> When the Earth spins around itself</span></div>
            </label>
        </div>
        <div class="row">
            <label class="quiz-button">
              <input type="radio" name="questao2" value="0" style="display:none;">
              <div class="text-alternativas"><span class="bold">B)</span><span> When the Sun moves away from the Earth</span></div>
            </label>
        </div>
        <div class="row">
        <label class="quiz-button">
        <input type="radio" name="questao2" value="0" style="display:none;">
          <div class="text-alternativas"><span class="bold">C)</span><span> When the Moon breaks into pieces</span></div>
        </label>
      </div>
      <div class="row">
        <label class="quiz-button">
        <input type="radio" name="questao2" value="1" style="display:none;">
          <div class="text-alternativas"><span class="bold">D)</span><span> When one object blocks the light of another</span></div>
        </label>
      </div>
      <div class="row">
        <label class="quiz-button">
        <input type="radio" name="questao2" value="0" style="display:none;">
          <div class="text-alternativas"><span class="bold">E)</span><span> When the stars disappear from the sky</span></div>
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