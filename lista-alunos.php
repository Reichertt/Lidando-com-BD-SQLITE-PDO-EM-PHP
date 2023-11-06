<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

// Cria a conexão com o BD SQlite
$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

// Executa o comando SQL para verificar os estudantes criados
$statement = $pdo->query('SELECT * FROM students;');

// Para saber mais sobre os fetchs
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);

//Mostra a lista de estudantes no formato de array
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData["name"],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
