<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $island = $this->island->atoll . ' ' . $this->island->name;
        $address = [
            'id' => $this->id,
            'name' => $this->name,
            'island' => $island,
        ];
        return $address;
    }
}
