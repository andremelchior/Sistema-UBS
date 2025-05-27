<?php
require_once("connection.php");

$cns = $_POST['cns'];
$senha = $_POST['senha'];

$query = $conn->query("SELECT cns, senha FROM paciente where cns = '$cns' and senha = '$senha'");

if ($query->rowCount() > 0) {
    header("Location: dashboard.php");
} else {
    echo "<script type="text/javascript">window.alert("Login inválido!");</script>";
    header("Location: index.php");
}

?>
