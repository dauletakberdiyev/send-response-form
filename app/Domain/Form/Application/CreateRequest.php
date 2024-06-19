<?php

namespace App\Domain\Form\Application;

use Illuminate\Foundation\Http\FormRequest;

final class CreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'phone' => ['required', 'integer', 'min:11'],
            'message' => ['required', 'string'],
        ];
    }

    public function getDTO(): CreateDTO
    {
        return new CreateDTO(
            $this->validated('full_name'),
            $this->validated('phone'),
            $this->validated('message'),
        );
    }
}
