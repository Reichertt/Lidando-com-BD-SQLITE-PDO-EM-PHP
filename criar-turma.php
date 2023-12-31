<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição da turma, criando mais de um usuário

$connection->beginTransaction();

try {
    $aStudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeImmutable('1985-05-01'),
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Sergio Lopes',
        new DateTimeImmutable('1985-05-01'),
    );
    $studentRepository->save($anotherStudent);

    // O commit indica que a sessão de beginTransaction foi finalizada
    $connection->commit();
} catch (\PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
