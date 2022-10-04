function fom(opcao) {
    switch (opcao) {
        case "listar":
            document.getElementById("form").innerHTML =
                `<form action="listar.php" method="POST">
                <fieldset>
                    <br> <br>
                    <h3 style="text-align:center;">Deixe vazio para Listar</h3>
                    <label>Nome do usuário:</label>
                    <input type="text" name="usuario"> <br> <br>
                    <input name="list" type="submit" value="Listar" ">
                </fieldset>
            </form>`;
            break;
        case "alterar":
            // let x = document.getElementById("index").value;

            document.getElementById("form").innerHTML =
            `<form action="alterar.php" method="POST">
                <fieldset>
                    <br> <br>

                    <label>Nome a ser Alterado:</label>
                    <input type="text" name="nome" id="index"> <br> <br>

                    <label>Novo Nome do Usuário:</label>
                    <input type="text" name="nomeNv" "> <br> <br>

                    <label>Novo email:</label>
                    <input type="text" name="email"> <br> <br>

                    <label>Novo Perfil:</label>
                    <input type="text" name="perfil"> <br> <br>

                    <label>Novo Tipo de usuário:</label>
                    <input type="text" name="tipo"> <br> <br>

                    <input name="alterar" type="submit" value="alterar">
                </fieldset>
            </form>`;
            break;
        case "excluir":
            document.getElementById("form").innerHTML =
                `<form action="excluir.php" method="POST">
                        <fieldset>
                            <br> <br>
                            <label>Nome do usuário:</label>
                            <input type="text" name="nome"> <br> <br>
                            <input name="deletar" type="submit" value="${opcao}">
                        </fieldset>
                    </form>`;
            break;

        default:
            document.getElementById("form").innerHTML =
                `<form action="incluir.php" method="POST">
                    <fieldset>
                        <br> <br>

                        <label>Nome:</label>
                        <input type="text" name="nome"> <br> <br>

                        <label>Email:</label>
                        <input type="text" name="email"> <br> <br>

                        <label>Tipo de Usuário:</label>
                        <input type="text" name="tipo"> <br> <br>

                        <label>Perfil do Usuário:</label>
                        <input type="text" name="perfil"> <br> <br>

                        <input name="incluir" type="submit" value="incluir">
                    </fieldset>
                </form>`;
            break;
    }

}