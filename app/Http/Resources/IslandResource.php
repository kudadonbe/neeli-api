<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AddressResource;
use App\Models\Address;



class IslandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $island = [
            'id' => $this->id,
            'atoll' => $this->atoll,
            'name' => $this->name,
            'addresses' => AddressResource::collection($this->whenLoaded('addresses')),
            
        ];
        return $island;
    }
}
