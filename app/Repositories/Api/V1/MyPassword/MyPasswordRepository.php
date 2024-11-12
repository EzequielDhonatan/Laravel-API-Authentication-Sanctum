<?php

namespace App\Repositories\Api\V1\MyPassword;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MyPasswordRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function update($data)
    {
        if (! $user = $this->entity->where('id', $data->user()->id)->first())
            return response()->json(['message' => 'Ops... falha ao atualizar'], 404);

        if (! $user || ! Hash::check($data['current_password'], $user->password)) {
            throw ValidationException::withMessages([
                'message' => ['As credenciais fornecidas estão incorretas.'],
            ]);
        }

        $user->update([
            'password' => Hash::make($data->password)
        ]);

        return response()->json(['message' => 'Senha atualizada com sucesso!'], 200);
    }
}