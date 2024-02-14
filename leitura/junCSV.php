<?PHP

//junção de 2 txt em um csv

$cursos = file('cursos_.txt');
$arquivo = file('arquivo.txt');

$arquivoCSV = fopen('arquivocsv.csv','w');

foreach($cursos as $curso){
  $linha = [trim($curso),'sim']; //vai ser uma tabela com o curso e na outra o sim como exemplo 
  //para diferenciar e identificar cada item da junção
  fputcsv($arquivoCSV,$linha,';');  //a juncao em si com o delimitador ';'
}

foreach($arquivo as $curso){
  $linha = [trim(mb_convert_encoding($curso,'')),'não']; //vai ser uma tabela com o curso e na outra o sim como exemplo 
  //para diferenciar e identificar cada item da junção, o mb_convert_encoding vai salvar utilizando UTF8
  //que manterá o acento no arquivo CSV 
  fputcsv($arquivoCSV,$linha,';');  //a juncao em si com o delimitador ';'
}
fclose($arquivoCSV);
