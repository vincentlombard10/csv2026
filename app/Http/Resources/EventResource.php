<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'permalink' => $this->permalink,
            'startsAt' => $this->starts_at,
            'endsAt' => $this->ends_at,
            'djs' => ArtistResource::collection($this->djs),
            'artists' => ArtistResource::collection($this->artists),
            'published' => $this->published,
            'status' => $this->status
        ];
    }
}
