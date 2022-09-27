<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="../css/pagefinal.css" rel="stylesheet"> 
    <title>Post</title>
</head>
<body background="../img/wallpaperPagefinal.png">
<body>
    <main>
        <?php
            $titulo = $_GET['title'];
            $conteudo = $_GET['content'];
            $autor = $_GET['author'];
            if ($titulo == '' || $conteudo == '' || $autor == '') {
                echo "<p>Preencha todos os campos!</p>";
            } else {
                
        ?>

        <div class="areatitulo">
            <h1 class="titulo"> <?= $titulo ?> </h1>
        </div>
        <section>
             <?= $conteudo ?> </textarea>
            <p class="direita"> <?= $autor ?> </p>
        </section>

        <?php } ?>
    </main>
</body>
</html>