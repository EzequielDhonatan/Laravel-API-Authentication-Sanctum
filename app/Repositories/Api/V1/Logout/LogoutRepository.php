<?php

namespace App\Repositories\Api\V1\Logout;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LogoutRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function logout()
    {
        if (! auth()->check())
            throw ValidationException::withMessages([
                'Ops... Você precisa está logado no sistema',
            ]);

        auth()->user()->tokens()->delete();

        return response()->json([
            'success'   => true,
        ], 200);
    }
}