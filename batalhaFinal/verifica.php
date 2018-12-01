<?php 

    session_start();

$_SESSION['ataque1'] = $_POST['ataque1'];
$_SESSION['novaposi1'] = $_POST['novaposi1'];
$_SESSION['c'] = $_SESSION['novaposi1'];


if($_SESSION['ataque1'] != $_SESSION['f'] && $_SESSION['ataque1'] != $_SESSION['f']+1 && $_SESSION['ataque1'] != $_SESSION['f']+2 && $_SESSION['ataque1'] != $_SESSION['f']+3 ){
    
    echo ("<script>
                    window.alert('Tiro na água!');
                    window.alert('Vez do jogador 2...')
                    window.location.href='p2.php';		
            </script>"
        );
}elseif($_SESSION['ataque1'] == $_SESSION['f']){
    $_SESSION['canoa2-0'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 2...')
                    window.location.href='p2.php';		
            </script>"
        );
}elseif($_SESSION['ataque1'] == $_SESSION['f']+1){
    $_SESSION['canoa2-1'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 2...')
                    window.location.href='p2.php';		
            </script>"
        );
}elseif($_SESSION['ataque1'] == $_SESSION['f']+2){
    $_SESSION['canoa2-2'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 2...')
                    window.location.href='p2.php';		
            </script>"
        );
}elseif($_SESSION['ataque1'] == $_SESSION['f']+3){
    $_SESSION['canoa2-3'] = 0;
    echo ("<script>
                    window.alert('Você acertou a canoa do inimigo!');
                    window.alert('Vez do jogador 2...')
                    window.location.href='p2.php';		
            </script>"
        );
}
    

?>