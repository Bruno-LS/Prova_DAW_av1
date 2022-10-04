<?php
include("server.php");
if (isset($_POST["alterar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $perfil = $_POST["perfil"];
    $tipo = $_POST["tipo"];
    $Novo_nome = $_POST["nomeNv"];

    $alteracao = "UPDATE `usuarios` SET ";

// verificar se os campos foram preenchidos e fazer se nao, nao faca nada
    if ($email != "") {
        $alteracao .= " `email` = '$email', ";
    }
    if ($perfil != "") {
        $alteracao .= " `perfil` = '$perfil', ";
    }
    if ($tipo != "") {
        $alteracao .= " `tipo` = '$tipo', ";
    }
    if ($Novo_nome != "") {
        $alteracao .= " `nome` = '$Novo_nome' ";
    }
    $alteracao .= " WHERE  `nome` =  '$nome' ";


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

    <link rel="stylesheet" type="text/css" href="nav.css" />
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