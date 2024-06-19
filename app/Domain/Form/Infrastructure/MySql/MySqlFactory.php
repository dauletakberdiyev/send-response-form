<?php

namespace App\Domain\Form\Infrastructure\MySql;

use App\Domain\Form\Domain\DatabaseConnector;
use App\Domain\Form\Domain\DatabaseFactory;

class MySqlFactory extends DatabaseFactory
{
    private string $connection = 'mysql';

    public function getDatabase(): DatabaseConnector
    {
        return new MySqlConnector($this->connection);
    }
}
