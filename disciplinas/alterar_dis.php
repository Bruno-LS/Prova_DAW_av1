<?php
include("server.php");
if (isset($_POST["alterar"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $periodo = $_POST["periodo"];
    $idpre = $_POST["idpre"];
    $credito = $_POST["credito"];

    $alteracao = "UPDATE `disciplinas` SET ";


    
    if ($nome != "") {
        $alteracao .= " `nome` = '$nome', ";
    }
    if ($periodo != "") {
        $alteracao .= " `periodo` = '$periodo', ";
    }
    if ($idpre != "") {
        $alteracao .= " `idpre` = '$idpre', ";
    }
    if ($credito != "") {
        $alteracao .= " `credito` = '$credito' ";
    }

    $alteracao .= "WHERE  `id` =  '$id' ";


    if (!$conn->query($alteracao)) {
        echo ("Error description: " . $conn->error);
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