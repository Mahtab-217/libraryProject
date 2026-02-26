<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class memberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
             "name"=>$this->name,
             "email"=>$this->email,
             "whatsApp_number"=>$this->whatsApp_number,
             "adress"=>$this->adress,
             "membership_date"=>$this->membership_date,
        ];
    }
}
