<?php
require('../transicao/session.php');
require('../transicao/connection.php');
if($_SESSION['tipoUsuario'] != 3){
    unset($_SESSION['tipoUsuario']);
    header("Location: ../index.php");
}

$cnpj = $_POST['hospital'];
$cpf = $_SESSION['cpf'];
$dataDeSolicitacao = date('y.m.d');

$sql = "INSERT INTO Agendamento (cnpj, cpf, dataDeSolicitacao) VALUES ('$cnpj', '$cpf', '$dataDeSolicitacao')";
mysqli_query($conn, $sql);

header("Location: ../exibicao/paciente_index.php");

