<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($email !="etectaboao@gmail.com" || $senha != "4321"){
       echo "ERRO: Insira os dados corretamente! Volte para página de login"."<br>";
       echo "<button type='submit'><a href='index.html'>Tentar novamente></a><button>";
    }else{
       include('home.php');
    }

?>

