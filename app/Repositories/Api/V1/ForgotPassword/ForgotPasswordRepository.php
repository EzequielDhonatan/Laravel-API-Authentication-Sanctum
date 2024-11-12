<?php

namespace App\Repositories\Api\V1\ForgotPassword;

use App\Models\User;
use Illuminate\Support\Facades\Password;

class ForgotPasswordRepository
{
    protected $entity;

    public function __construct(User $model)
    {
        $this->entity = $model;
    }

    public function sendResetLinkEmail($data)
    {
        $response = Password::sendResetLink($data->only('email'));

        if ($response == Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Link de redefinição enviado.'], 200);
        }

        return response()->json(['message' => 'Ocorreu um erro ao enviar o link de redefinição.'], 400);
    }
}