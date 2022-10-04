function fom(opcao) {
    switch (opcao) {
        case "listar":
            document.getElementById("form").innerHTML =
                `<form action="listar_dis.php" method="POST">
                <fieldset>
                    <br> <br>
                    <h3 style="text-align:center;">Deixe vazio para Listar</h3>
                    <label>ID da Disciplina:</label>
                    <input type="text" name="id"> <br> <br>
                    <input name="list" type="submit" value="Listar" ">
                </fieldset>
            </form>`;
            break;
        case "alterar":
            document.getElementById("form").innerHTML =
                `<form method="POST">
                    <fieldset>
                        <br> <br>
                        <h3>Digite o ID que queira alterar</h3>
                        <label>ID:</label>
                        <input type="text" name="id" id="index"> <br> <br>
                        <input  type="submit" value="${opcao}" onclick="sim()">
                    </fieldset>
                </form>`;
            break;

        case "deletar":
            document.getElementById("form").innerHTML =
                `<form action="deletar_dis.php" method="POST">
                        <fieldset>
                            <br> <br>
                            <label>ID da Disciplina:</label>
                            <input type="text" name="id"> <br> <br>
                            <input name="deletar" type="submit" value="${opcao}">
                        </fieldset>
                    </form>`;
            break;

        default:
            document.getElementById("form").innerHTML =
                `<form action="incluir_dis.php" method="POST">
                    <fieldset>
                        <br> <br>

                        <label>ID da Matéria:</label>
                        <input type="text" name="id"> <br> <br>

                        <label>Nome da Matéria:</label>
                        <input type="text" name="nome"> <br> <br>

                        <label>Período:</label>
                        <input type="text" name="periodo"> <br> <br>

                        <label>ID de Pré requisito:</label>
                        <input type="text" name="idpre"> <br> <br>

                        <label>Crédito:</label>
                        <input type="text" name="credito"> <br> <br>

                        <input name="incluir" type="submit" value="incluir">
                    </fieldset>
                </form>`;
            break;
    }

}

function sim() {

    let x = document.getElementById("index").value;
    
    document.getElementById("form").innerHTML =
        `<form action="alterar_dis.php" method="POST">
        <fieldset>
            <br> <br>

            <label>ID da Matéria:</label>
            <input type="text" name="id" value="${x}"> <br> <br>

            <label>Novo Nome da Matéria:</label>
            <input type="text" name="nome"> <br> <br>

            <label>Novo Período:</label>
            <input type="text" name="periodo"> <br> <br>

            <label>Novo ID de Pré requisito:</label>
            <input type="text" name="idpre"> <br> <br>

            <label>Novo Crédito:</label>
            <input type="text" name="credito"> <br> <br>

            <input name="alterar" type="submit" value="alterar">
        </fieldset>
    </form>`;

}