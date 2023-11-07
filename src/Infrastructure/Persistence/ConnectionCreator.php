<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

// Classe responsável pela conexão com o banco de dados
class ConnectionCreator
{
    // Cria a conexão com o banco.sqlite
    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';

        return new PDO('sqlite:' . $databasePath);
    }
}
