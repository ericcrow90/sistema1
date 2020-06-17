<?php
 /*DSN - Data Source Name
 $prefixo = "mysql:";
 $hostname = "localhost";
 $dbname = "papelaria";
 $dsn = $prefixo."dbname=". $dbname . ";" . "hostname=". $hostname;
 $user = "root";
 $password = "";

 //PDO - Classe PHP para a inserção de dados

 //Try e Catch serve para retornar erros
 try {
$pdo = new PDO($dsn,$user,$password);

//echo $sql




 }catch(\trowable $th){
echo $erro->getMessage(); 
 }

*/

//try significa TENTE - Tente fazer a conexão com o banco de dados
//Se não de ele executa o CATCH que vai armazenar uma variável de erro
//getMessage - método que retorna a mensagem do erro.
//getCode - método que retorna o código do erro.
try {
$pdo=new PDO("mysql:host=localhost;dbname=papelaria","root","");
}catch(PDOException $e){

    echo $e->getMessage();

}

?>

