<?php

namespace App\Http\Resources;

use App\Models\Guardian;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'guardianId' => $this->guardian_id,
            'schoolId' => $this->school_id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'gender' => $this->gender,
            'birthDate' => $this->birth_date,
            'guardian' => GuardianResource::collection($this->whenLoaded('guardian')),
            'school' => SchoolResource::collection($this->whenLoaded('school')),
        ];

    }
}
