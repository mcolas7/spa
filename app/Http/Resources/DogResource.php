<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DogResource extends JsonResource
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
            'dog_id' => $this->dog_id,
            'sexName' => $this->sex->name, // $this->sex_id->name $this->sex->name
            'sizeName' => $this->size->name,
            'name' => $this->name,
            'image' => $this->image,
            'breed' => $this->breed,
            'color' => $this->color,
            'adopted' => $this->adopted,
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}
