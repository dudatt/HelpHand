<?php
include_once '../assets/bd/sessao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../HelpHand/assets/css/cadastro_divisao.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>HelpHand</title>
</head>
<header>
    <nav class="d-flex">
        <a href="./HelpHand/usuario/home.html" class="ml-2 mt-2">
            <img src="/HelpHand/assets/img/logo_preta.png" alt="" class="w-100">
        </a>

        <ul class="d-flex justify-content-end align-items-center w-100 m-0">
            <a href="/HelpHand/usuario/FAQ.php" class="d-flex justify-content-center">Fale Conosco</a>
            <a href="/HelpHand/login.php" class="d-flex justify-content-center">Entrar</a>
        </ul>
    </nav>
</header>

<main>
    <div class="container_block p-4" style="background: #304B47;">
        <div class="content_block w-100 d-flex flex-column align-items-center justify-content-around h-100">
            <h1 class="text-white d-flex justify-content-center">Cadastrar como:</h1>
            <div class="botoes d-flex flex-column align-items-center w-75">
                <button class="w-100"><a href="#">Cliente</a></button>
                <button class="w-100"><a href="#">Autônomo</a></button>
            </div>
        </div>
    </div>
</main>


</html>