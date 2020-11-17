<?php
if((isset($_POST['txt_inicio']) &&
isset($_POST['txt_fim']) &&
isset($_POST['txt_dimensao']) &&
isset($_POST['txt_pesquisa']) ){
  
$inicio = $_POST["inicio"];
$fim = $_POST["fim"];
$dimensao = $_POST["dimensao"];
$pesquisa = $_POST["pesquisa"];
    
    $dimensao=$_POST('dimensao');
    for($i=0;$i<20;$i++){
        $meuArray[$i]=rand (1,$max);
        echo $meuArray[$i]. '';
        
    }
    echo "Valores gerados pelo Array."
        .$dimensao. "<br>";
    echo "O valor" .$pesquisa."encontra-se na posiçao " .$inicio. "vetor" "<br>">;
    echo "O valor" .$pesquisa."encontra-se na posiçao " .$fim. "vetor" "<br>">;
    
    echo .$pesquisa. "<br>";
    
    
}
   ?>