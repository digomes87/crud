<?php
require('./conn/conexao_PDO.php');


if ($_GET) {

    $sql = $pdo->query("SELECT * FROM Pessoa WHERE id = {$_GET['id']}");

    if ($sql !== false) {
        //imprima
        foreach ($sql as $row) {
            
        }
    }
} elseif ($_POST) {
    $sql = "UPDATE Pessoa set nome = '{$_POST['nome']}', email = '{$_POST['email']}', telefone = '{$_POST['telefone']}', endereco = '{$_POST['endereco']}'";
    $query = $pdo->query($sql);

    $sql = "SELECT * FROM Pessoa where id = {$_POST['id']}";

    $query = $pdo->prepare($sql);
    $query->execute();
    $data = $query->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require ('./header.php'); ?>
    </head>
    <body>
        <div class="container">
            <h2>ID:<?php echo $row['id']?></h2>
            <form class="form-horizontal" method="post" action="formulario.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="id" value="<?php echo $row['id']?>">
                        <input type="text" class="form-control" id="nome" placeholder="Como te lhamas ??" value="<?php echo $row['nome']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Qual é o email pra enviar nudes ?" value="<?php echo $row['email']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="telefone">Telefone:</label>
                    <div class="col-sm-10">
                        <input type="phone" class="form-control" id="telefone" placeholder="Numero do zap zap ?" value="<?php echo $row['telefone'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="endereco">Endereço:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço para os Presentes" value="<?php echo $row['endereco']?>">
                    </div>
                </div>
   
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-warning">SALVAR ALTERAÇÃO</button>
                        <a href="index.php"><button type="button" class="btn btn-info">Voltar</button></a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>