<?php
$tcliente = $_POST['cliente'];
$tcpf = $_POST['cpf'];
$tnome = $_POST['nome'];
$tsobrenome = $_POST['sobrenome'];
$tsexo = $_POST['sexo'];
$topera = $_POST['opera'];
$servername = "localhost:3306";
$username = "root";
$password = "usjt";
$dbname = "mydb";
// Conexão do Banco de Dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Operação com Banco de Dados
IF ($topera == "C")
{
// CONSULTA
$sql = "SELECT * FROM cadastro";
$rest = $conn->query($sql);
while($row = $rest->fetch_assoc())
{

echo "cliente: " . $row["cliente"].
"cpf: " . $row["cpf"].
" nome: " . $row["nome"].
" sobrenome:" .$row["sobrenome"].
" sexo:".$row["sexo"]. 

"<br>"."<br>";

}
echo "CONSULTA COM SUCESSO . $sql ." ;
}
else
if ($topera == "I")
{
// INCLUSÃO
$sql = "INSERT INTO cadastro (cliente, cpf, nome, sobrenome, sexo) VALUES ('".$tcliente."','".$tcpf."','".$tnome."','".$tsobrenome."', '".$tsexo."')";
echo "INCLUSÃO COM SUCESSO . $sql ." ;
}
else

if ($topera == "A")
{
// ALTERAÇÃO
$sql = "UPDATE cadastro SET nome = '".$tnome."', cpf = '".$tcpf."', sobrenome = '".$tsobrenome."',sexo = '".$tsexo."' where cliente=
'".$tcliente."'";
echo "ALTERAÇÃO COM SUCESSO . $sql ." ;
}
else{
if ($topera == "E")
{
// EXCLUSÃO
$sql = "DELETE FROM cadastro where cliente= '".$tcliente."'";
echo "EXCLUSÃO COM SUCESSO . $sql " ;
}
else
// OPERAÇÃO INCORRETA
echo "OPERAÇÃO INCORRETA" ;
}
if ($conn->query($sql) ==! TRUE)
{
echo "Falha na inclusao : " . $sql . "<br>" . $conn->error;
}
?>
