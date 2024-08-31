<?php


$conexao = new PDO('mysql:host=localhost;dbname=pro', 'root', '');

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$arquivo = $_FILES['arquivo'];
var_dump($arquivo);

$linhas_importadas = 0;
$linhas_naoimportadas = 0;
$naoimportados = "";
if($arquivo['type'] == "text/csv"){
      $dados_arquivo = fopen($arquivo['tmp_name'], "r");

        while($linha = fgetcsv($dados_arquivo, 1000, ";")){
        array_walk_recursive($linha, 'converter');
        var_dump($linha);


        $query_usuario ="INSERT INTO cronograma (data,SMS, RCS, EMAIL, WHATS, id_car) VALUES (:data, :SMS, :RCS, :EMAIL, :WHATS, :id_car)";
        $cad_usuario = $conexao->prepare($query_usuario);
        $cad_usuario->bindValue(':data', ($linha[0] ?? "NULL")); 
        $cad_usuario->bindValue(':SMS', ($linha[0] ?? "NULL"));
        $cad_usuario->bindValue(':RCS', ($linha[1] ?? "NULL"));
        $cad_usuario->bindValue(':EMAIL', ($linha[2] ?? "NULL"));
        $cad_usuario->bindValue(':WHATS', ($linha[3] ?? "NULL"));
        $cad_usuario->bindValue(':id_car', ($linha[0] ?? "NULL"));
        $cad_usuario->execute();

        if($cad_usuario->rowCount()){ 
        $linhas_importadas++;
     }else {
        $linhas_naoimportadas++;
        $naoimportados = $naoimportados . "," .($linha[0] ?? "NULL");
     }
       
    }  
      
}else{
    echo "Somente arquivo csv";
}


function converter(&$dados_arquivo){ 

    $dados_arquivo =mb_convert_encoding($dados_arquivo, "UTF-8", "ISO-8859-1" );
 }
?>
