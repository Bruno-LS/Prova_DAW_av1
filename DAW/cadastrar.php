


<?php
  include("server.php");
$bolCriar = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }


    if (isset($_POST["incluir"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $perfil = $_POST["perfil"];
        $tipo = $_POST["tipo"];

        $sqlCriar = "INSERT into `usuarios`(`nome`, `email`, `senha`, `perfil`, `tipo`) VALUES ('$nome','$email', `$senha`, '$perfil', '$tipo')";

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
    <script src="form_Dis_js.js"></script>

</head>

<body>

    <section id="dis">
        <h2>Cadastrar Disciplinas</h2>
        <input type="submit" value="Incluir" onclick="fomD('incluir')">
        <input type="submit" value="Alterar" onclick="fomD('alterar')">
        <input type="submit" value="Excluir" onclick="fomD('deletar')">
        <input type="submit" value="Listar/Buscar" onclick="fomD('listar')">
    </section>
    <br><br>
    <section id="usu">
        <h2>Cadastrar Usuário</h2>
        <input type="submit" value="Cadastrar" onclick="fomU('cadastrar')">
        <input type="submit" value="Listar" onclick="fomU('listar')">
    </section>


    <p id="form"></p>
    <?php if($bolCriar == true){ echo("<p style=\"margin-top: 0px;\">Aluno Criado!</p>");} ?>

</body>

</html>