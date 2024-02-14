<?php

$arquivo = fopen('cursos_.txt','w'); //w é modo write - escrever, no modo w se executar mais de uma vez 
// o conteudo nao será adicionado e sim sobreescrito, para acrescentar ao final utiliza o modo 'a'
$curso = 'Design PHP';
fwrite($arquivo,$curso); //vai escrever o conteudo de curso em arquivo, posso adicionar tambem a quantidade
// de caracteres de $curso para ser escrita (lenght)
echo $arquivo;
fclose($arquivo);


//pode tudo ser resumido com uma função : 
//$curso = 'Design PHP';
//file_put_contents('cursos__.txt',$curso,FILE_APPEND);
//obs: FILE_APPEND == 'a'; 