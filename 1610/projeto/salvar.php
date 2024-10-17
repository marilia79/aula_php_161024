<?php
#arquivo salvar.php
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);

$texto = '<div>';

// .= é concatenar
$texto .="Nome: $nome";
$texto .="<p>$msg</p>";
$texto .='</div>';

#salvar arquivo de texto-------\n\n é uma nova linha;
file_put_contents('mensagens.txt', $texto. "\n\n", FILE_APPEND|LOCK_EX);

#Redirecionamento de página
header('Location:index.php');


