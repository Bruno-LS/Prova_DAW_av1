<?php
include("server.php");
$nome = $_POST["usuario"];
if (isset($_POST["list"]) && ($nome != "" || $nome != NULL)) {

    $sqlExib = "SELECT `nome`, `email`, `senha`, `perfil`, `tipo` FROM `usuarios` WHERE `nome` = '$nome'";

    $boolTest = false;
    if (!$conn->query($sqlExib)) {
        echo ("Error description: " . $conn->error);
    }
    if ($result = mysqli_query($conn, $sqlExib)) {
        while ($row = mysqli_fetch_row($result)) {
            $printN = $row[0];
            $printEm = $row[1];
            $printSenha = $row[1];
            $printPerfil = $row[2];
            $printTipo = $row[3];
        }
        if (mysqli_num_rows($result)) {
            $boolTest = true;
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
    <br><br>
    <section id="usu">
        <h2>Cadastrar Usuário</h2>
        <input type="submit" value="Cadastrar" onclick="fomU('cadastrar')">
        <input type="submit" value="Listar" onclick="fomU('listar')">
        <input type="file" name="arquivo">
    </section>


    <?php
    //CASO LISTAR TODOS 
    if (isset($_POST["list"]) && ($nome == "" || $nome == NULL)) {
        echo
         "<table>
         <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Perfil</th>
            <th>Tipo</th>
        </tr><br>";

        $sqlExib = "SELECT `nome`, `email`, `senha`, `perfil`, `tipo` FROM `usuarios`";

        if (!$conn->query($sqlExib)) {
            echo ("Error description: " . $conn->error);
        }

        if ($result = mysqli_query($conn, $sqlExib)) {
            while ($row = mysqli_fetch_row($result)) {
                echo  "<tr><td> $row[0]</td>";
                echo  "<td> $row[1]</td>";
                echo  "<td> $row[2]</td>";
                echo  "<td> $row[3]</td>";
                echo  "<td> $row[4]</td></tr><br>";
            }
        }
        echo  "</table>";
    }
    // CASO LISTAR 1
    else if (isset($_POST["list"])) {
        if ($boolTest == true) {
            echo 
            "<table>
                <tr>
                    <td>$printN</td>
                    <td>$printEm</td>
                    <td>$$printSenha</td>
                    <td>$printPerfil</td>
                    <td>$printTipo</td>
                </tr>
            </table>";
        }
    }
    ?>

</body>

</html>