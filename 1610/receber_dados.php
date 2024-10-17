<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber Dados do Form</title>
</head>
<body>
    <div class="container">
        <h1>Dados do Form</h1>
        <!-- aqui vai o php -->
        <?php
         
        //Você pode receber via POST  ou via GET usando: $_POST ou $_GET
            echo 'Nome: '.$_POST['nome'];
            echo '<br>';
            echo 'Estado: ' .$_POST['estado'];
            echo '<br>';
            echo 'Campus: '.$_GET['campus'];
        ?>

        <h1>Receber dados com segurança</h1>
        <?php
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $campus = filter_input(INPUT_GET, 'campus', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Nome: $nome <br> Campus: $campus";

        ?>

    </div>
    
</body>
</html>