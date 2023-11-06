<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    "Vitor Reichert Gonçalves",
    new \DateTimeImmutable('2001-07-14')
);

// Realiza uma verificação na idade informada
echo $student->age();
