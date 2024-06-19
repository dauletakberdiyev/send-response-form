<?php

namespace App\Domain\Form\Presentation\Controllers;

use App\Domain\Form\Application\CreateRequest;
use App\Domain\Form\Domain\CreateService;
use App\Domain\Form\Domain\DatabaseFactory;
use App\Domain\Form\Infrastructure\File\FileFactory;
use App\Http\Controllers\Controller;

final class CreateFileController extends Controller
{
    private CreateService $service;
    private DatabaseFactory $factory;

    public function __construct()
    {
        $this->factory = new FileFactory();
        $this->service = new CreateService($this->factory);
    }

    public function create(CreateRequest $request): void
    {
        $this->service->saveResponse($request->getDTO());
    }
}
