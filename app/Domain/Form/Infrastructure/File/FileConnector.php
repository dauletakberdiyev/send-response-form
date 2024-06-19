<?php

namespace App\Domain\Form\Infrastructure\File;

use App\Domain\Form\Application\CreateDTO;
use App\Domain\Form\Domain\DatabaseConnector;
use Illuminate\Support\Facades\Storage;

class FileConnector implements DatabaseConnector
{
    private string $connection;

    public function __construct(string $connection)
    {
        $this->connection = $connection;
    }

    public function saveResponse(CreateDTO $dto): void
    {
        $content = 'full_name: ' . $dto->fullName . ', phone: ' . $dto->phone . ', message: ' . $dto->message;

        Storage::disk($this->connection)->put(time().'_response_form.txt', $content);
    }
}
