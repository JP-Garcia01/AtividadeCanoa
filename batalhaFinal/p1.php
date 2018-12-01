<!DOCTYPE html>
<html>
<head>
    <title>Batalha Naval</title>
    <link rel="stylesheet" type="text/css" href="p1.css">
</head>
<body>

    

<?php

 session_start();

    if($_SESSION['canoa1-0'] == 0 && $_SESSION['canoa1-1'] == 0 && $_SESSION['canoa1-2'] == 0 && $_SESSION['canoa1-3'] == 0 && $_SESSION['canoa2-0'] == 0 && $_SESSION['canoa2-1'] == 0 && $_SESSION['canoa2-2'] == 0 && $_SESSION['canoa2-3'] == 0 ){
        echo ("<script>
                    window.alert('A canoa " . $_SESSION['b'] . " foi completamente destruida!');
                    window.alert('A canoa " . $_SESSION['e'] . " também!');
                    window.alert('O jogo empatou!');
                    window.location.href='fim.php';     
            </script>"
        );
    }elseif($_SESSION['canoa1-0'] == 0 && $_SESSION['canoa1-1'] == 0 && $_SESSION['canoa1-2'] == 0 && $_SESSION['canoa1-3'] == 0){
        echo ("<script>
                    window.alert('A canoa " . $_SESSION['b'] . " foi completamente destruida!');
                    window.alert('" . $_SESSION['d'] . " é o vencedor!');
                    window.location.href='fim.php';     
            </script>"
        );
    }elseif($_SESSION['canoa2-0'] == 0 && $_SESSION['canoa2-1'] == 0 && $_SESSION['canoa2-2'] == 0 && $_SESSION['canoa2-3'] == 0){
        echo ("<script>
                    window.alert('A canoa " . $_SESSION['e'] . " foi completamente destruida!');
                    window.alert('" . $_SESSION['a'] . " é o vencedor!');
                    window.location.href='fim.php';     
            </script>"
        );
    }
        
    $nome1 = $_SESSION['a'];
    $canoa1 = $_SESSION['b'];
    $posicao1 = $_SESSION['c'];
  

    $posi_final1 = $_SESSION['c'];
    $posi_final1 = $posi_final1 + 4;

    

    

    $game = true;
    $aux = 0;

    echo "<div class='muro'> .";
            
    echo "</div>";
    
    echo "<div class='mar'>";
        
       echo "<div class='p1'>";
    
        for($j=0; $j<=9; $j++){
            echo " <section class='num'>
                    $j
                </section>";

        echo "<section class='barco'>";
            switch($aux){
                case 0:
                   if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-0'] == 1){
                        echo "<img src='CANOA/topo.png' class='topo'>";
                        $posicao1 = $posicao1 + 1;
                        $aux = 1;
                    }else if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-0'] == 0){
                        echo "  ";
                        $posicao1 = $posicao1 + 1;
                        $aux = 1;
                   }
                   break;
                case 1:
                    if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-1'] == 1){
                        echo "<img src='CANOA/meio1.png'class='meio1'>";
                        $posicao1 = $posicao1 + 1;
                        $aux = 2;
                    }else if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-1'] == 0){
                        echo "  ";
                        $posicao1 = $posicao1 + 1;
                        $aux = 2;
                    }
                    break;
                case 2:
                    if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-2'] == 1){
                        echo "<img src='CANOA/meio2.png'class='meio2'>";
                        $posicao1 = $posicao1 + 1;
                        $aux = 3;
                    }else if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-2'] == 0){
                        echo "  ";
                        $posicao1 = $posicao1 + 1;
                        $aux = 3;
                    }
                    break;
                case 3:
                    if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-3'] == 1){
                        echo "<img src='CANOA/base.png'class='base'>";
                        $posicao1 = $posicao1 + 1;
                    }else if($j == $posicao1 && $j != $posi_final1 && $_SESSION['canoa1-3'] == 0){
                        echo "  ";
                        $posicao1 = $posicao1 + 1;
                    }
                    break;
            }  
            echo "</section>" ;

            echo "<br>";
        }

            echo "</div>";


        echo "</div>";

        echo "<div class='form'>
            <form method='post' action='verifica.php' class='form1'>
            <label class='Nome'>" . $_SESSION['a'] . "</label>
                <br><Label>Escolha uma posição para atacar: </label><br>
                <select name='ataque1'>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
                <br><Label> Escolha uma nova posição para a sua canoa: </label><br>
                <select name='novaposi1'>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
                <input type='submit' value='Atirar'>
            </form>
            </div>";

    //}
    echo "</div>";


?>



</body>
</html>






