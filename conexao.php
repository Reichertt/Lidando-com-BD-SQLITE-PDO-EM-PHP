<?php
// Cria a conexão com o BD SQlite
$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

// Verifica se conectou
echo 'Servidor conectado';

// Executa com o comando exec a criação da tabela
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');
