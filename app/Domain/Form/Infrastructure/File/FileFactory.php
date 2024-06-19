<?php

namespace App\Domain\Form\Infrastructure\File;

use App\Domain\Form\Domain\DatabaseConnector;
use App\Domain\Form\Domain\DatabaseFactory;

class FileFactory extends DatabaseFactory
{
    private string $connection = 'public';

    public function getDatabase(): DatabaseConnector
    {
        return new FileConnector($this->connection);
    }
}
