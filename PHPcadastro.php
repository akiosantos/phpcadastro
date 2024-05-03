<?php
$tcliente = isset($_POST['cliente']) ? $_POST['cliente'] : 0;
$tnome = isset($_POST['nome']) ? $_POST['nome'] : '';
$tsobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$tsexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

$servername = "localhost:3306";
$username = "root";
$password = "usjt";
$dbname = "mydb";

// Conexão do Banco de Dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Falha na conexao : " . $conn->connect_error);
}

// Insert do Banco de Dados
$sql = "INSERT INTO cadastro (cliente, nome, sobrenome, sexo) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $tcliente, $tnome, $tsobrenome, $tsexo);

if ($stmt->execute()) {
    echo "Inclusao com sucesso";
} else {
    echo "Falha na inclusao : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
