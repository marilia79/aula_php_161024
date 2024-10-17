<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="mensagens"></div>
        <form action="salvar.php" method="post">
            <input required type="text" name="nome" id="nome" placeholder="Nome">
            <input required type="text" name="msg" id="msg" placeholder="Mensagem">
            <input type="submit" value="Enviar">
        </form>
        <div class="mensagens">
            <!-- imprimi as mensagens na tela do formulário -->
            <?=file_get_contents('mensagens.txt');?>
            
        </div>
    </div>
    
</body>
</html>