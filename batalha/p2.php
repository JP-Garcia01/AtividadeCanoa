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
    
    $aux = 0;
    
    $posicao2 = $_SESSION['f'];
    $posi_final2 = $_SESSION['f'];
    $posi_final2 = $posi_final2 + 4;

    echo "<div class='p2'>";
    
        for($j=0; $j<=9; $j++){
            echo "$j";
            
            switch($aux){
                case 0:
                   if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-0'] == 1){
                        echo " [ ]";
                        $posicao2 = $posicao2 + 1;
                        $aux = 1;
                    }else if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-0'] == 0){
                        echo " [x]";
                        $posicao2 = $posicao2 + 1;
                        $aux = 1;
                   }
                   break;
                case 1:
                    if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-1'] == 1){
                        echo " [ ]";
                        $posicao2 = $posicao2 + 1;
                        $aux = 2;
                    }else if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-1'] == 0){
                        echo " [x]";
                        $posicao2 = $posicao2 + 1;
                        $aux = 2;
                    }
                    break;
                case 2:
                    if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-2'] == 1){
                        echo " [ ]";
                        $posicao2 = $posicao2 + 1;
                        $aux = 3;
                    }else if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-2'] == 0){
                        echo " [x]";
                        $posicao2 = $posicao2 + 1;
                        $aux = 3;
                    }
                    break;
                case 3:
                    if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-3'] == 1){
                        echo " [ ]";
                        $posicao2 = $posicao2 + 1;
                    }else if($j == $posicao2 && $j != $posi_final2 && $_SESSION['canoa2-3'] == 0){
                        echo " [x]";
                        $posicao2 = $posicao2 + 1;
                    }
                    break;
            }   

            echo "<br>";
        }

        echo "<div>
			<form method='post' action='verifica2.php'>
				<br><Label> " . $_SESSION['d'] . ", escolha uma posição para atacar: </label><br>
				<select name='ataque2'>
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
				<select name='novaposi2'>
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