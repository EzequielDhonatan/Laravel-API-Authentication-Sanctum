<?php

namespace App\Http\Resources\Api\V1\MyData;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use Carbon\Carbon;

class MyDataResource extends JsonResource
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
            'email'         => $this->resource['user']->email,
            'created_at'    => Carbon::make($this->resource['user']->created_at)->format('d/m/Y H:i:s'),
            'updated_at'    => Carbon::make($this->resource['user']->updated_at)->format('d/m/Y H:i:s'),

        ]; // return

    } // toArray
}
