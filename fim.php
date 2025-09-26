<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Result</title>
  </head>
  <body class="fundo">
    <?php
       session_start();
       $_SESSION["q8"]=$_POST["questao8"];
    
       $acertos=0;

       /*contando as respostas certas*/
  if($_SESSION["q1"]=="1")
     $acertos++;
  if($_SESSION["q2"]=="1")
     $acertos++;
  if($_SESSION["q3"]=="1")
     $acertos++;
  if($_SESSION["q4"]=="1")
     $acertos++;
  if($_SESSION["q5"]=="1")
     $acertos++;
  if($_SESSION["q6"]=="1")
     $acertos++;
  if($_SESSION["q7"]=="1")
     $acertos++;
  if($_SESSION["q8"]=="1")
     $acertos++;

  /*criando texto sobre o desempenho*/
  if($acertos==0)
     $texto="You know the Earth is not flat, right?";
  else if($acertos==1)
     $texto="Maybe you just need to improve your English, Don't give up!";
  else if($acertos==2)
     $texto="Well, you can be very useful on Earth";
  else if($acertos==3)
     $texto="You did your best, that's the number 1 characteristic of an astronaut!";
  else if($acertos==4)
     $texto="Everything in balance, as it should be.";
  else if($acertos==5)
     $texto="A great job!";
  else if($acertos==6)
     $texto="Looks like someone here likes Space.";
  else if($acertos==7)
     $texto="A wrong question? Don't worry! This is like a little planet in the Universe.";
  else
     $texto="You're a real astronaut! (and fluent too!).";

    echo "<div class='container areaGeral'>
      <h1 class='titulos'>You've reached the end!</h1><br><br>
      <h1 class='titulos' style='font-size: 150px;'>".$acertos."/8</h1><br><br>
      <div> 
      <p>".$texto."</p><br><br>
      </div>
      <div>
      <a href='index.html'>
        <button type='button' class='btnNormal'>Restart</button>
      </a>
      </div>
      <div>
      <a href='../menu2ab.html'>
        <button type='button' class='btnNormal'>Menu</button>
      </a>
      </div>
    </div>"
    ?>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>