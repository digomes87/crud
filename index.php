<?php
require('./conn/conexao_PDO.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php require './header.php';?>   
    </head>
    <body>
        <div class="container">
            <?php $pdoConsulta = $pdo->query("SELECT * FROM Pessoa"); ?>
            <h2>Lista de Registros</h2>
            <p>Consulta realizada vis PDO e layout criado com Bootstrap</p>
            <table class="table">
                <a href="cadastro.php"><button type="button" class="btn btn-primary btn-block">Cadastrar Novo Usuario</button></a>
                <div></div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pdoConsulta as $row) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nome'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['telefone'] ?></td>
                            <td><?php echo $row['endereco'] ?></td>
                            <td><a href="formulario.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-primary">Editar</button></a></td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
        </div>
    </body>
</html>
