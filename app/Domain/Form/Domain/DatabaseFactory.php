<?php

namespace App\Domain\Form\Domain;

use App\Domain\Form\Application\CreateDTO;

abstract class DatabaseFactory
{
    abstract public function getDatabase(): DatabaseConnector;

    public function save(CreateDTO $dto): void
    {
        $database = $this->getDatabase();
        $database->saveResponse($dto);
    }
}
