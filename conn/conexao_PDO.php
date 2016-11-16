<?php

try {

    $pdo = new PDO('mysql:host=localhost;dbname=CRUD_DATA', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    print "LOG de Erro {$e}";
}      

/*
    === Aqui temos uma conexao tipo SINGLETON, que garente que teremos apenas uma conexao durante todo o processo.
 *      Isso evita que muitas conexoes sejam abertas ocassionando lentidao no sistema
 */