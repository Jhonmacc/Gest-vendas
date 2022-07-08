<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'gest_vendas';


if ($conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)) { 

//echo"Conectado";

}else
  echo "Erro ao conectar com banco de dados!!";
  
 



?>