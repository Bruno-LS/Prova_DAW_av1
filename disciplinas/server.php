<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "3daw_acad_manha";


$bolCriar = false;
$bolAlt = false;
$bolDel = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
}
    ?>