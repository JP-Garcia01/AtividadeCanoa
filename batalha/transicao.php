<?php

    session_start();

    $_SESSION['d'] = $_POST['nome2'];
    $_SESSION['e'] = $_POST['canoa2'];
    $_SESSION['f'] = $_POST['posicao2'];

    $_SESSION['canoa1-0'] = 1;
    $_SESSION['canoa1-1'] = 1;
    $_SESSION['canoa1-2'] = 1;
    $_SESSION['canoa1-3'] = 1;

    $_SESSION['canoa2-0'] = 1;
    $_SESSION['canoa2-1'] = 1;
    $_SESSION['canoa2-2'] = 1;
    $_SESSION['canoa2-3'] = 1;

     echo ("<script>
                    window.alert('A partida irá começar!');
                    window.location.href='p1.php';		
            </script>"
        );
?>