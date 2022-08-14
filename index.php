<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';
echo 'Olá mundo!';

$servername = "127.0.0.1"; /* ip do servidor web. Estou usando o meu localmente */
$username = "root";
$password = "Senha123"; /* senha do usuario root */
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* Verificação da conexão */
if (mysqli_connect_errno()) {
    printf("Falha de conexão: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";


if ($link->query($query) === TRUE) {
  echo "Dados gravados com sucesso";
} else {
  echo "Erro: " . $link->error;
}

?>
</body>
</html>
