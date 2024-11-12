<?php

namespace App\Repositories\Api\V1\Login;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function login($data)
    {
        $user = $this->entity->where('email', $data['email'])->first();

        if (! $user || ! Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas estão incorretas.'],
            ]);
        }

        $user->tokens()->delete();

        $token = $user->createToken('myApp')->plainTextToken;

        return [
            'user'  => $user,
            'token' => $token,
        ];
    }
}