<?php 
//Criando variáveis para salvar as informações do banco de dados
$hostname = "localhost";
$bd = "cadastrar";
$usuario = "root";
$senha = "";

//Criando a conexão com o banco de dados
$con = new mysqli($hostname, $usuario, $senha, $bd);
if ($con->connect_errno){
    echo "Erro de conexão com o banco de dados: (" . $con->connect_errno . ")" . $con->connect_error;
}
