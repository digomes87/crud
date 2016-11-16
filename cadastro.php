<?php

require ('./conn/conexao_PDO.php');

if ($_POST) {

    $sql = "INSERT INTO Pessoa (id, nome, email, telefone, endereco) VALUES (null, '{$_POST['nome']}', '{$_POST['email']}', '{$_POST['telefone']}', '{$_POST['endereco']}')";

    $mensagem = "Ops erro ao tentar salvar o registro!";

    if ( $pdo->query($sql) ) {
        $mensagem = "Registro salvo com sucesso!";
    }
}
?>

<html>
<body>
<title>Formulario Cadastro</title>
<head>
    <?php require './header.php';?>  
</head>
</body>
<h2>Formulario Cadastro.</h2>

<?php
    if (!empty($mensagem)) {
        echo $mensagem;
?>
    <br/>
    <br/>
    <br/>
    <a href="index.php"> <button type="button">Voltar</button> </a>

<?php
    die; }
?>
<form method="post" action="cadastro.php">
    <table>
        <tr>
            <td>
                Nome: <input name="nome" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>
                Email: <input name="email" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>
                Telefone: <input name="telefone" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>
                Endereço: <input name="endereco" type="text">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Salvar</button>
                <a href="index.php"> <button type="button">Voltar</button></a>
            </td>
        </tr>
    </table>

</form>
</html>
