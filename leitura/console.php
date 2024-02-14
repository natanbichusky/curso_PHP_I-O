<?php 

//adicionar dados digitados no console pelo teclado

$teclado = fopen('php://stdin','r'); //stdin é para pegar do teclado

$novoCurso = trim(fgets($teclado));

file_put_contents('cursos_.txt',"\n$novoCurso", FILE_APPEND);

//posso resumir utilizando uma funcao stin do PHP que substituiria a variavel $teclado
// ex:  $novoCurso = trim(fgets(STDIN));