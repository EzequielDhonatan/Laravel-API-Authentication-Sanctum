<?php

namespace App\Http\Resources\Api\V1\MyProfile;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use Carbon\Carbon;

class MyProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'name'          => $this->resource['user']->name,
            'updated_at'    => Carbon::make($this->resource['user']->updated_at)->format('d/m/Y H:i:s'),

        ]; // return

    } // toArray
}
