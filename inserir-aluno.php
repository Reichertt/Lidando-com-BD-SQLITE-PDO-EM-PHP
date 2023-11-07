<?php

use Alura\Pdo\Domain\Model\Student;
// autoload puxado do composer
require_once 'vendor/autoload.php';

// Cria a conexão com o BD SQlite
$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

// Valores do estudante
$student = new Student(
    null,
    "Vitor Reichert Gonçalves",
    new \DateTimeImmutable('2001-07-14')
);
$name = $student->name();

// Inseri o valor do estudante na tabela com os respectivos valores
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindParam(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído com sucesso";
}
