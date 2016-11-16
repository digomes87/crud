<?php require ('./conn/conexao_PDO.php');
    if($_GET){
        $sql = "delete FROM pessoa WHERE id = {$_GET['id']}";
        
        $msg = "Erro ao excluir Registros";
        if($pdo->query($pdo)){
            $msg = "Sucesso ao excluir Registro";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Excluir Registro</title>
    </head>
    <body>
        <?php
            echo $msg;
        ?>
        <br>
        <a href="index.php"><button type="button">Voltar</button></a>
    </body>
</html>
