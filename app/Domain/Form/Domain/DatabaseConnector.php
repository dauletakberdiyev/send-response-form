<?php

namespace App\Domain\Form\Domain;

use App\Domain\Form\Application\CreateDTO;

interface DatabaseConnector
{
    public function saveResponse(CreateDTO $dto): void;
}
