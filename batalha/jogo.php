<?php

 session_start();
    
    $nome1 = $_SESSION['a'];
    $canoa1 = $_SESSION['b'];
    $posicao1 = $_SESSION['c'];

    $nome2 = $_POST['nome2'];
    $canoa2 = $_POST['canoa2'];
    $posicao2 = $_POST['posicao2'];

    $rio1 = [];
    $rio2 = [];
    $canoa1[0] = true;
    $canoa1[1] = true;
    $canoa1[2] = true;
    $canoa1[3] = true;
    $canoa2[0] = true;
    $canoa2[1] = true;
    $canoa2[2] = true;
    $canoa2[3] = true;
    
    
	 for($i=0; $i<=9999; $i++){
         echo "<div><h1>Turno " . ($i+1);
     }
//	 echo "<div>
//			<form method='post'>
//				<br><Label> $nome1, escolha uma posição para atacar: </label><br>
//				<select name='ataque1'>
//					<option>1</option>
//					<option>2</option>
//					<option>3</option>
//					<option>4</option>
//					<option>5</option>
//					<option>6</option>
//					<option>7</option>
//					<option>8</option>
//					<option>9</option>
//					<option>10</option>
//				</select>
//				<input type='submit' value='Atirar' onclick='myFunction()'>
//			</form>
//			</div>";
//	 
//	 $x = $_POST['ataque1'];

	 //echo "$x";
	 

  //   for ($i=0; $i <10 ; $i++) { 
  //       $player1[$i] = $i+1;
  //       echo "$player1[$i]";
		// for($f=0;$f<4;$f++){
		// 	if ($player1[$i] == $barco1[$f]) {				
		// 		if($r <=$e+4){
		// 			echo " [ ]";
		// 			$r = $r + 1;			    
		// 		}                          
		// 	}
		// }
        
  //       echo"<br>";
  //   }



	 function verifica_Ataque()
	 {
		 	for ($i=0; $i <10 ; $i++) { 
	        $player1[$i] = $i+1;
	        echo "$player1[$i]";
			for($f=0;$f<4;$f++){
				if ($player1[$i] == $barco1[$f]) {				
					if($barco1[$i] == true){
						echo " [ ]";
						$r = $r + 1;			    
					}else {
						echo " [x]";
					}                          
				}
			}
	        
	        echo"<br>";
	    }
	 }
	
	

	

    echo "<br>";

    for ($i=0; $i <10 ; $i++) { 
        $player2[$i] = $i+1;
        echo "$player2[$i]";
        if ($player2[$i] == $r2) {
			
             if($r2 >=$e2+4){

            }else{
              echo " [ ]";
              $r2 = $r2 + 1;    
            }                           
        }
        echo"<br>";
    }
	
	echo "<div>
			<form>
				<br><Label> $nome2, escolha uma posição para atacar: </label><br>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
				<input type='submit' value='Atirar'>
			</form>
			</div>";




	  ?>

</body>
</html>