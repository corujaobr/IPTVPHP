<?php
$servername = "localhost";
$username = "teste";
$password = "teste@123";
$dbname = "usuarios_info";

$nome = $_POST['nome'];
$email = $_POST['email'];
$status = $_POST['status'];
$telefone = $_POST['telefone'];
$datavalidade = $_POST['datavalidade'];
$datainicial = $_POST['datainicial'];

if
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `usuarios_info`(`usuario_id`, `nome`, `email`, `status`, `telefone`, `datavalidade`, `datainicial`) 
VALUES ($nome,$email,$status,$telefone,$datavalidade,$datainicial)";

if ($conn->query($sql) === TRUE) {
    echo "Usuario Gravado com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>