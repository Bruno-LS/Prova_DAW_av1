<?php
include("server.php");
$id = $_POST["id"];
if (isset($_POST["list"]) && ($id != "" || $id != NULL)) {

    $sqlExib = "SELECT `id`, `nome`, `periodo`, `idpre`, `credito` FROM `disciplinas` WHERE `id` = '$id'";

    $boolTest = false;
    if (!$conn->query($sqlExib)) {
        echo ("Error description: " . $conn->error);
    }
    if ($result = mysqli_query($conn, $sqlExib)) {
        while ($row = mysqli_fetch_row($result)) {
            $printId = $row[0];
            $printN = $row[1];
            $printPer = $row[2];
            $printIdpre = $row[3];
            $printcredito = $row[4];
        }
        if (mysqli_num_rows($result)) {
            $boolTest = true;
        }
    }
}
// include("CRUD.html");
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

    <?php
    //CASO LISTAR TODOS 
    if (isset($_POST["list"]) && ($id == "" || $id == NULL)) {
        echo
         "<table>
         <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Periodo</th>
            <th>Id_Pre-requisito</th>
        </tr><br>";

        $sqlExib = "SELECT `id`, `nome`, `periodo`, `idpre`, `credito` FROM `disciplinas`";

        if (!$conn->query($sqlExib)) {
            echo ("Error description: " . $conn->error);
        }

        if ($result = mysqli_query($conn, $sqlExib)) {
            while ($row = mysqli_fetch_row($result)) {
                echo  "<tr><td> $row[0]</td>";
                echo  "<td> $row[1]</td>";
                echo  "<td> $row[2]</td>";
                echo  "<td> $row[3]</td></tr>";
                echo  "<td> $row[4]</td></tr><br>";
            }
        }
        echo  "</table>";
    }
    // CASO LISTAR 1
    else if (isset($_POST["list"])) {
        if ($boolTest == true) {
            echo "<table>
                    <tr>
                        <td>$printId</td>
                        <td>$printN</td>
                        <td>$printPer</td>
                        <td>$printIdpre</td>
                        <td>$printcredito</td>
                    </tr>
                </table>";
        }
    }
    ?>

</body>

</html>