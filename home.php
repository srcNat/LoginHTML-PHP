<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/home.css" rel="stylesheet"> 
    <title>Formule um texto</title>
</head>
<body>
    <?php
        if ($_POST == []) {
            echo "<h1>É necessário login para ter acesso à esta página.</h1>";
        } else { 
        }
    ?>
    <section>
        <form method="get" action="pagefinal.php">
            <label>Título:</label>
            <input type="text" name="title" placeholder=""><br>
            <textarea name="content" placeholder="Insira seu texto aqui" cols="50" rows="30"></textarea><br>
            <input type="text" name="author" placeholder="Digite o nome do autor"><br>
            <br>
            <input type="submit" value="Postar">
        </form>
    </section>
</body>
</html>