<?php

namespace App\Domain\Form\Application;

final readonly class CreateDTO
{
    public function __construct(
        public string $fullName,
        public int $phone,
        public string $message
    ) {
    }
}
