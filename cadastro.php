<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concluído</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<div>
<?php

//Incluindo o arquivo de conexão com o banco de dados e salvando os dados preenchidos pelo usuário 
include("conectar.php");

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$nascimento = new DateTime($_POST['nascimento']);
$data_atual = new DateTime();
$diferença = $data_atual->diff($nascimento);
$idade = $diferença->y;
$sexo = $_POST['sexo'];
$justificativa = $_POST['justificativa'];

//Inserindo os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, matricula, email, sexo, idade, justificativa) VALUES ('$nome', '$matricula', '$email', '$sexo', '$idade', '$justificativa')";

$resultado = mysqli_query($con, $sql);

//Verificando se os dados foram salvos no banco de dados
if(mysqli_insert_id($con)){
    echo "Seus dados foram enviados com sucesso!";
}
else{
    echo "Erro na conexão!";
}
?>
</div>
