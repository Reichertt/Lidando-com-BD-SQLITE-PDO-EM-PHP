<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Vinicius Dias',
    new \DateTimeImmutable('1997-10-15')
);

// Realiza uma verificação na idade informada
echo $student->age();
