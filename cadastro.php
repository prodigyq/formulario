<?php

include("conectar.php");

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$nascimento = new DateTime($_POST['nascimento']);
$data_atual = new DateTime();
$diferença = $data_atual->diff($nascimento);
$idade = $diferença->y;
$sexo = $_POST['sexo'];

$sql = "INSERT INTO aluno (nome, matricula, email, sexo, idade) VALUES ('$nome', '$matricula', '$email', '$sexo', '$idade')";

$resultado = mysqli_query($con, $sql);

if(mysqli_insert_id($con)){
    echo "Conexão bem sucedida!";
    echo "Seus dados foram salvos com sucesso!";
}
else{
    echo "Erro na conexão!";
}
?>
