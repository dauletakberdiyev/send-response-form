<?php

namespace App\Domain\Form\Domain;

use App\Domain\Form\Application\CreateDTO;

final class CreateService
{
    private DatabaseFactory $databaseFactory;

    public function __construct(DatabaseFactory $databaseFactory)
    {
        $this->databaseFactory = $databaseFactory;
    }

    public function saveResponse(CreateDTO $dto): void
    {
        $this->databaseFactory->save($dto);
    }
}
