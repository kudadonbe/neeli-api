<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $island = $this->address->island->atoll . ' ' . $this->address->island->name;
        
        $patientInfo = [
            'id' => $this->id,
            'name' => $this->name,
            'dob' => $this->dob,
            'national_id' => $this->national_id,
            'address' => [
                'id' => $this->address->id,
                'house' => $this->address->name,
                'island' => $island
            ]

        ];
        return $patientInfo;
    }
}
