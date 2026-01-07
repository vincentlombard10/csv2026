<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use Illuminate\Http\JsonResponse;
use Statamic\Entries\Entry;

class EventController extends Controller
{
    public function getEvents(int $offset = 0, int $limit = 10): JsonResponse
    {
        $query = Entry::query()
            ->where('collection', 'events')
            ->orderBy('published_at', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get();

        return response()->json([
            'events' => EventResource::collection($query),
            'offset' => $offset,
            'limit' => $limit
        ]);
    }
}
