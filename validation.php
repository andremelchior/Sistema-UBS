<?php
require_once("connection.php");

$cns = mysqli_real_escape_string($conn, $_POST['cns']);
$senha = mysqli_real_escape_string($conn, md5($_POST['senha']));

$sql = "SELECT cns, senha FROM paciente where cns = '$cns' and senha = '$senha'";
$query = mysqli_query($conn, $sql);


if ($query) {
    header("location: dashboard.php");
} else {
    echo "Login inválido!";
}

?>