<?php
include "acesso.php";

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>

    <title>Sistema Caixa</title>
</head>
<body>

<h1>SISTEMA CAIXA</h1>

<H2>SERVIÇOS</H2>
<tr>
    <td>Código</td> 
    <td>Nome</td>
    <td>Valor Unitário</td>
</tr>
<br>


  <?php


  
$buscar = "SELECT * FROM tblservicos";

$linhas="";
$dados = $pdo->query($buscar);
if ($dados->rowcount()>0){
  foreach($dados->fetchall()as $servico){

     // TR - linhas//
     // TD - Colunas//
     
     $linhas.= "<br> <br> <tr data-id=".$servico['cod'].">";
     $linhas.="<td data-cod='". $servico['codservicos']."'>". $servico['codservicos']. "</td> &nbsp";
     $linhas.="<td data-nome=". $servico['nomeserv'].">". $servico['nomeserv']. "</td> &nbsp";
     $linhas.="<td data-quantd=". $servico['quantserv'].">". $servico['quantserv']. "</td> &nbsp";
     $linhas.="<td data-valor='". $servico['valorunitserv']."'>". $servico['valorunitserv']. "</td> &nbsp";

 $linhas.="<td>";
     $linhas.="<Button type= 'button' id='btnsalvar' onclick='salvar'>COMPRAR</button>";
      $linhas.="</td>";
      "&nbsp";
     
  }
  echo $linhas;

  }
 

    ?>
          


</body>
</html>

