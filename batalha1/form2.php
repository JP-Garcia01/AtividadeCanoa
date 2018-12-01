<?php 

    session_start();
    $_SESSION['a'] = $_POST["nome"];
    $_SESSION['b'] = $_POST["canoa"];
    $_SESSION['c'] = $_POST["posicao"];


    /*echo $_SESSION[a] . "<br>";
    echo $_SESSION[b] . "<br>";
    echo $_SESSION[c] . "<br>";*/
?>

<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bem-vindo!</title>
  </head>
  <body>
    <section class="full black">
    
    </section>
      
    <section class="full main">
        
        <section class="form">
            
            <div class="full">
                
                <center>
                    <h3>Player 2, preencha os campos abaixo:</h3>
                </center>
                
            </div>
            
            <div class="full">
                <div class="center">
                
                    <form method="post" action="transicao.php">

                        <div class="full">
                            <input type="text" name="nome2" class="tx" placeholder="Nome" required>
                        </div>

                        <div class="full">
                            <input type="text" name="canoa2" class="tx" placeholder="Nome da Canoa" required>
                        </div>

                        <div class="full">
                            <br>
                            <label><h5>Posição inicial:</h5></label>
                            <select name="posicao2" class="tx" required>
                                <option><center>0</center></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>

                        <div class="full">
                            <input type="submit" class="bt" value="Cadastrar"> 
                        </div>



                    </form>
                    
                    <div class="full">
                        *Sua munição é infinita
                    </div>
                    
                </div>
            </div>
        </section>
      
    </section>
      
    <section class="full black">
      
    </section>

    
  </body>
</html>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>