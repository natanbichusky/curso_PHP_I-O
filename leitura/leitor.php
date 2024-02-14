<?php

$arquivo = fopen('arquivo.txt','r'); // file open , nome do arquivo e tipo de abertura - r = read

$tamanhoArquivo = filesize('arquivo.txt'); // descobrir o tamanho total do arquivo para usar de 
//argumento no fread
$arquivo = fread($arquivo,$tamanhoArquivo); // lê o arquivo total direto , serve para 
//arquivos de tamanho curto
echo $arquivo;


//while(!feof($arquivo)){            //enquanto não chega no fim do arquivo 
//  $leitura = fgets($arquivo); //le uma linha do arquivo (a função le o arquivo linha por linha
//serve para quando o arquivo é muito comprido)
 // echo $leitura;
  
//}

fclose($arquivo);


// TUDO ISSO PODE SER RESUMIDO EM APENAS UMA FUNÇÃO DO PHP :
// $leitura = file_get_contents('arquivo.txt'); -- file le tudo e dá o close
// echo $leitura