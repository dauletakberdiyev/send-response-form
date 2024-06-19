<?php

namespace App\Domain\Form\Infrastructure\MySql;

use App\Domain\Form\Application\CreateDTO;
use App\Domain\Form\Domain\DatabaseConnector;
use App\Domain\Form\Domain\ResponseFormModel;
use Illuminate\Support\Facades\DB;
use Throwable;

class MySqlConnector implements DatabaseConnector
{
    private string $connection;

    public function __construct(string $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @throws Throwable
     */
    public function saveResponse(CreateDTO $dto): void
    {
        DB::connection($this->connection)->transaction(function () use ($dto) {
            $responseForm = new ResponseFormModel();

            $responseForm->full_name = $dto->fullName;
            $responseForm->phone = $dto->phone;
            $responseForm->message = $dto->message;

            $responseForm->save();
        });
    }
}
