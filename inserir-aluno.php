<?php

use Alura\Pdo\Domain\Model\Student;

// autoload puxado do composer
require_once 'vendor/autoload.php';

// Cria a conexão com o BD SQlite
$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

// Valores do estudante
$student = new Student(null, "Fabricio Brito", new \DateTimeImmutable('1994-09-24'));

// Inseri o valor do estudante na tabela com os respectivos valores
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));
