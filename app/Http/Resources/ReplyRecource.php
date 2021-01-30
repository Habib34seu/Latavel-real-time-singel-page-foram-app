<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyRecource extends JsonResource
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
            'reply'=>$this->body,
            'user_id'=>$this->user->name,
            'created_at'=>$this->created_at->diffForHumans()
        ];
    }
}
