<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$dataVenda = (isset($_POST['dataVenda'])) ? $_POST['dataVenda'] : '';
$tipoVenda = (isset($_POST['tipoVenda'])) ? $_POST['tipoVenda'] : '';
$protocolo = (isset($_POST['protocolo'])) ? $_POST['protocolo'] : '';
$statusCert = (isset($_POST['statusCert'])) ? $_POST['statusCert'] : '';
$produto = (isset($_POST['produto'])) ? $_POST['produto'] : '';
$tipoDesc = (isset($_POST['tipoDesc'])) ? $_POST['tipoDesc'] : '';
$valor = (isset($_POST['valor'])) ? $_POST['valor'] : '';
$statusVenda = (isset($_POST['statusVenda'])) ? $_POST['statusVenda'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO venda (nome, dataVenda, tipoVenda, protocolo, statusCert, produto, tipoDesc, valor, statusVenda) VALUES('$nome', '$dataVenda', '$tipoVenda', '$protocolo', '$statusCert', '$produto', '$tipoDesc', '$valor', '$statusVenda') ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM venda ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE venda SET nome='$nome', dataVenda='$dataVenda', tipoVenda='$tipoVenda', protocolo='$protocolo', statusCert='$statusCert', produto='$produto', tipoDesc='$tipoDesc', valor='$valor', statusVenda='$statusVenda' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM venda WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM venda WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM venda";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;