<?php

namespace App\Repositories\Api\V1\MyProfile;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MyProfileRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function update($data)
    {
        if (! $user = $this->entity->where('id', auth()->user()->id)->first())
            return response()->json(['message' => 'Ops... falha ao atualizar'], 404);

        $user->update([
            'name' => $data['name'],
        ]);

        return [
            'user'  => $user,
        ];
    }
}