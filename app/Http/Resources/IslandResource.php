<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IslandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $name = $this->atoll . ' ' . $this->name;
        $island = [
            'id'=> $this->id,
            'name' => $name,
        ];
        return $island;
    }
}
