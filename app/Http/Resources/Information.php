<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Information extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'cp' => $this->cp,
            'socialMedia' => $this->socialMedia->name,
        ];
    }
}
