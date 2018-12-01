<?php 

    session_start();

$_SESSION['ataque2'] = $_POST['ataque2'];
$_SESSION['novaposi2'] = $_POST['novaposi2'];
$_SESSION['f'] = $_SESSION['novaposi2'];


if($_SESSION['ataque2'] != $_SESSION['c'] && $_SESSION['ataque2'] != $_SESSION['c']+1 && $_SESSION['ataque2'] != $_SESSION['c']+2 && $_SESSION['ataque2'] != $_SESSION['c']+3 ){
    
    echo ("<script>
                    window.alert('Tiro na água!');
                    window.alert('Vez do jogador 1...')
                    window.location.href='p1.php';		
            </script>"
        );
}elseif($_SESSION['ataque2'] == $_SESSION['c']){
    $_SESSION['canoa1-0'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 1...')
                    window.location.href='p1.php';		
            </script>"
        );
}elseif($_SESSION['ataque2'] == $_SESSION['c']+1){
    $_SESSION['canoa1-1'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 1...')
                    window.location.href='p1.php';		
            </script>"
        );
}elseif($_SESSION['ataque2'] == $_SESSION['c']+2){
    $_SESSION['canoa1-2'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 1...')
                    window.location.href='p1.php';		
            </script>"
        );
}elseif($_SESSION['ataque2'] == $_SESSION['c']+3){
    $_SESSION['canoa1-3'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 1...')
                    window.location.href='p1.php';		
            </script>"
        );
}
    

?>