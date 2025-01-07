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

        $address = $this->address->name . ', ' . $this->address->island->atoll . ' ' . $this->address->island->name;

        $patientInfo = [
            'id' => $this->id,
            'nid' => $this->national_id,
            'name' => $this->name,
            'dob' => $this->dob,
            'address' => $address,
        ];
        return $patientInfo;
    }
}
