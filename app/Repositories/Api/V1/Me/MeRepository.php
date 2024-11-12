<?php

namespace App\Repositories\Api\V1\Me;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MeRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function me()
    {
        if (! auth()->check())
            throw ValidationException::withMessages([
                'Ops... Você precisa está logado no sistema',
            ]);

        return [
            'user'  => auth()->user()
        ];
    }
}