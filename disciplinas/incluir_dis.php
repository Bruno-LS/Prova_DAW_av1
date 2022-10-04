<?php
echo "sim";
  include("server.php");
$bolCriar = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
    

    if (isset($_POST["incluir"])) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $periodo = $_POST["periodo"];
        $pre = $_POST["idpre"];
        $credito = $_POST["credito"];

        $sqlCriar = "INSERT into `disciplinas`(`id`, `nome`, `periodo`, `idpre`, `credito`) VALUES ('$id','$nome', '$periodo', '$pre', '$credito')";

        if (!$conn->query($sqlCriar)) {
            echo("Error description: " . $conn->error);
        } else {
            $bolCriar = true;
        }
    }
        }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="form_js.js"></script>

</head>

<body>

    <section>
        <input type="submit" value="incluir" onclick="fom('incluir')">
        <input type="submit" value="Alterar" onclick="fom('alterar')">
        <input type="submit" value="Excluir" onclick="fom('deletar')">
        <input type="submit" value="Listar/Buscar" onclick="fom('listar')">
    </section>
    <p id="form"></p>

</body>

</html>