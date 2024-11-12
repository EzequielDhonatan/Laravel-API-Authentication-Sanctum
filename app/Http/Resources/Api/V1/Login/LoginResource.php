<?php

namespace App\Http\Resources\Api\V1\Login;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'name'      => $this['user']->name,
            'email'     => $this['user']->email,
            'token'     => $this['token'],

        ]; // return

    } // toArray
}
