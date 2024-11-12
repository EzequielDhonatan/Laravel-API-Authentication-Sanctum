<?php

namespace App\Repositories\Api\V1\Register;

use App\Models\User;
use Illuminate\Validation\ValidationException;

class RegisterRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function register($data)
    {
        $user = $this->entity->create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
        ]);

        if (! $user)
            throw ValidationException::withMessages([
                'email' => ['Ops... Falha ao cadastrar.'],
            ]);

        $user->tokens()->delete();

        $token = $user->createToken('MyApp')->plainTextToken;

        return [
            'user'  => $user,
            'token' => $token,
        ];
    }
}