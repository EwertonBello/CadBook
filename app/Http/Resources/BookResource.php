<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = $this->relUsers;
        return [
            'id' => $this->id,
            'title' => $this->title,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ],
            'price' => $this->price,
            'pages' => $this->pages,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
