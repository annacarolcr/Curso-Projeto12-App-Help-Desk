<?php
    session_start();

    //destrói a variável de sessão e redireciona para a página de login
    session_destroy();
    header('location: index.php');
?>