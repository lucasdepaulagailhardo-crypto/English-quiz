<?php
$fileName = "classificacao.txt";
$names = file($fileName, FILE_IGNORE_NEW_LINES);

if (!file_exists($fileName)) {
    die("Erro: O arquivo 'classificacao.txt' não foi encontrado.");
}
  
if ($names === false) {
    die("Erro ao ler o arquivo.");
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
    <link rel="script" href="javascript/script.js">
    
    <title>Cadastro do nome</title>
    
  </head>
  <body class="fundo">
      <div class="conatainer areaGeral"> 
          <h1 class="titulos">Visits Book</h1>
          <div class='table_component div-rolavel' role='region' tabindex='0'>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomes</th>
                        <th>Acertos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            // Itera sobre o array $nomes
            foreach ($names as $index => $linha): 
                // Divide a linha pelo separador '|'
                $dados = explode('|', $linha);
                // Verifica se o array tem pelo menos 3 elementos (ID, Nome, Acertos)
                if (count($dados) == 3):
                    ?>
                <tr>
                    <td><?php echo $dados[0]; ?></td> <!-- ID -->
                    <td><?php echo htmlspecialchars($dados[1]); ?></td> <!-- Nome -->
                    <td><?php echo $dados[2]; ?></td> <!-- Acertos -->
                </tr>
                <?php endif; endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="index.html">
        <button type="button" class="btnNormal">Return</button>
      </a>
</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>