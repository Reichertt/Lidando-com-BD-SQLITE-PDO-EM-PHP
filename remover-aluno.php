<?php

require_once 'vendor/autoload.php';

// Cria a conexão com o BD SQlite
$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

// Deleta os respectivos usuários com os parametros passados
$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');

// Espera o primeiro argumento do banco a ser passado 1 = name, o segundo argumento é o valor que você deseja associar ao marcador de posição e por fim o parametro PDO
$preparedStatement->bindValue(1, 2, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
