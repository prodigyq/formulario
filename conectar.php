<?php 

$hostname = "localhost";
$bd = "cadastrar";
$usuario = "root";
$senha = "";

//Criação de objeto abaixo
$con = new mysqli($hostname, $usuario, $senha, $bd);
if ($con->connect_errno){
    echo "Erro de conexão com o banco de dados: (" . $con->connect_errno . ")" . $con->connect_error;
}
