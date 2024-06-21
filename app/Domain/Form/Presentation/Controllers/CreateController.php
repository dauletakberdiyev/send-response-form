<?php

namespace App\Domain\Form\Presentation\Controllers;

use App\Domain\Form\Application\CreateRequest;
use App\Domain\Form\Domain\CreateService;
use App\Domain\Form\Domain\DatabaseFactory;
use App\Domain\Form\Infrastructure\File\FileFactory;
use App\Domain\Form\Infrastructure\MySql\MySqlFactory;
use App\Http\Controllers\Controller;

final class CreateController extends Controller
{
    private CreateService $service;

    public function __construct()
    {
//        $this->factory = new MySqlFactory();
//        $this->service = new CreateService($this->factory);
    }

    public function create(string $type, CreateRequest $request): void
    {
        switch ($type)
        {
            case 'mysql':
                $this->service = new CreateService(new MySqlFactory());
                break;
            case 'file':
                $this->service = new CreateService(new FileFactory());
                break;
        }

        $this->service->saveResponse($request->getDTO());
    }
}
