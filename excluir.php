<?php
$bolDel = false;
include("server.php");
if (isset($_POST["deletar"])) {
        $nome = $_POST["nome"];

        $sqlDel = "DELETE  FROM `usuarios` WHERE `nome` = '$nome' " ;

        if (!$conn->query($sqlDel)) {
            echo ("Error description: " . $conn->error);
        }else{
            $bolDel = true;
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
        <input type="submit" value="Incluir" onclick="fom('incluir')">
        <input type="submit" value="Alterar" onclick="fom('alterar')">
        <input type="submit" value="Excluir" onclick="fom('excluir')">
        <input type="submit" value="Listar/Buscar" onclick="fom('listar')">
    </section>
    <p id="form"></p>

    <?php if($bolDel == true){ echo("<p style=\"margin-top: 0px;\">Usuário Escafedeu-se!</p>");} ?>
</body>
</html>   
